<?php namespace Chenkacrud\Services\Store;

class Local {

    /**
     * @param $source
     * @param $name
     * @param $basePath
     * @param $suffix
     * @return Image
     */
    public function saveImage($source, $name, $basePath, $suffix)
    {
        $image = Image::make($source);

        return $this->save($name, $basePath, $suffix, $image);
    }

    /**
     * @param $source
     * @param $name
     * @param $basePath
     * @return Image
     */
    public function saveRetina($source, $name, $basePath)
    {
        $image = $this->saveImage($source, $name, $basePath, '@2x');
        $image->resize($image->width() / 2, null, function ($constraint)
        {
            $constraint->aspectRatio();
        });

        return $this->save($name, $basePath, '@1x', $image);
    }

    /**
     * @param $name
     * @param $basePath
     * @param $suffix
     * @param $image
     */
    protected function save($name, $basePath, $suffix, $image)
    {
        return $image->save(public_path() . $basePath . $name . $suffix . '.png');
    }
}