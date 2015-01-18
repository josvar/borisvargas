<?php namespace Chenkacrud\Resources;

use Chenkacrud\Resources\Exceptions\CannotSaveImageException;
use Intervention\Image\Facades\Image;

class UploadImage extends ResourceManager {

    protected $basePath;
    protected $dir;
    protected $paths = [];
    protected $hash;

    function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->dir = 'assets/images/posts/temp';
        $this->hash = md5(uniqid(rand(), true));

        $this->paths['raw_name'] = $this->hash;
    }


    function processImage($data)
    {
        $this->paths['extension'] = $data['file']->guessExtension();
        $name = $data['file']->getClientOriginalName();

        $image = Image::make($data['file']);

        $this->generateFolder();
        $this->storeImages($image, $name);

    }

    function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param $image
     * @param $name
     * @throws CannotSaveImageException
     */
    protected function storeImages($image, $name)
    {
        $name = $this->generateName($name, '@2x');
        $path = $this->generatePath($name);
        if ($image->save($path))
        {
            $this->paths['2x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($name, '@1x');
        $path = $this->generatePath($name);

        $image->resize($image->width() / 2, $image->height() / 2);
        if ($image->save($path))
        {
            $this->paths['1x'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($name, '@thumb');
        $path = $this->generatePath($name);
        $image->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        if ($image->save($path))
        {
            $this->paths['thumb'] = $this->generateRelativePath($name);
        } else
        {
            throw new CannotSaveImageException($path);
        }
    }

    protected function generateName($name, $suffix)
    {
        $path_parts = pathinfo($name);
        $name = $this->hash;
        $extension = $path_parts['extension'];

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