<?php namespace Chenkacrud\Resources;

use Chenkacrud\Blocks\Paths\LocalPath;
use Chenkacrud\Resources\Exceptions\CannotSaveImageException;
use Intervention\Image\Facades\Image;

class DropboxImage extends ResourceManager {

    protected $basePath;
    protected $dir;
    protected $paths = [];

    function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->dir = 'assets/images/posts/' . date('Ymd');
    }


    function processImage($data)
    {
        $data = json_decode($data, true);

        $image = Image::make($data['link']);

        $this->generateFolder();

        $this->storeImages($data, $image);

    }

    function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param $data
     * @param $image
     * @throws CannotSaveImageException
     */
    protected function storeImages($data, $image)
    {
        $name = $this->generateName($data['name'], '@2x');
        $path = $this->generatePath($name);
        if ($image->save($path))
        {
            $this->paths[] = new LocalPath($name, $this->dir);
        }
        else{
            throw new CannotSaveImageException($path);
        }

        $name = $this->generateName($data['name'], '@1x');
        $path = $this->generatePath($name);

        $image->resize($image->width() / 2, $image->height() / 2);
        if ($image->save($path))
        {
            $this->paths[] = new LocalPath($name, $this->dir);
        }
        else{
            throw new CannotSaveImageException($path);
        }
    }

    protected function generateName($name, $suffix)
    {
        $path_parts = pathinfo($name);
        $name = $path_parts['filename'];
        $extension = $path_parts['extension'];

        return $name . $suffix . '.' . $extension;
    }

    protected function generatePath($name)
    {
        return $this->basePath . '/' . $this->dir . '/' . $name;
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