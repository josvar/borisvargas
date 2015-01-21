<?php namespace Chenkacrud\Resources;

use Chenkacrud\Resources\Exceptions\CannotSaveImageException;
use Intervention\Image\Facades\Image;

class UploadImage extends ResourceManager {

    protected $basePath;
    protected $dir;
    protected $paths = [];

    //tododev: crear nuevos dimensiones para las imagenes

    function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->dir = 'assets/images/posts/' . date('Ymd');
        $this->paths['relative'] = $this->dir;
    }


    function processImage($data)
    {
        $this->paths['extension'] = $data['file']->guessExtension();

        $name = $data['file']->getClientOriginalName();
        $path_parts = pathinfo($name);

        $this->paths['raw_name'] = $path_parts['filename'];
        $imagePostThumb = Image::make($data['file']);
        $imageFull = Image::make($data['file']);

        $this->generateFolder();

        $this->storeImages($imagePostThumb, $imageFull, $this->paths['raw_name']);

    }

    function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param $imagePostThumb
     * @param $imageFull
     * @param $raw_name
     * @throws CannotSaveImageException
     */
    protected function storeImages($imagePostThumb, $imageFull, $raw_name)
    {
        //Store Full Images
        $name = $this->generateName($raw_name, '@full2x');
        $path = $this->generatePath($name);
        $imageFull->resize( 1280 , null, function ($constraint) {
            $constraint->aspectRatio();
        });
        if ($imageFull->save($path))
        {
            $this->paths['@full2x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($raw_name, '@full1x');
        $path = $this->generatePath($name);
        $imageFull->resize(640,  null, function ($constraint) {
            $constraint->aspectRatio();
        });
        if ($imageFull->save($path))
        {
            $this->paths['@full1x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($raw_name, '@thumb');
        $path = $this->generatePath($name);
        $imageFull->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        if ($imageFull->save($path))
        {
            $this->paths['thumb'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        //Store Post Thumb Images
        $name = $this->generateName($raw_name, '@post-thumb2x');
        $path = $this->generatePath($name);
        $imagePostThumb->resize( 1280 , 852);
        if ($imagePostThumb->save($path))
        {
            $this->paths['@post-thumb2x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($raw_name, '@post-thumb1x');
        $path = $this->generatePath($name);
        $imagePostThumb->resize(640, 426);
        if ($imagePostThumb->save($path))
        {
            $this->paths['@post-thumb1x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }
    }

    protected function generateName($name, $suffix)
    {
        $extension = $this->paths['extension'];

        return $name . $suffix . '.' . $extension;
    }

    protected function generatePath($name)
    {
        return $this->basePath . '/' . $this->generateRelativePath($name);
    }

    protected function generateRelativePath($name)
    {
        return $this->dir . '/' . $name;
    }

    protected function generateFolder()
    {
        $dir = $this->basePath . '/' . $this->dir;
        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }
}