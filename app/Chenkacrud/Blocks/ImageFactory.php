<?php namespace Chenkacrud\Blocks;

use Illuminate\Support\Facades\App;

class ImageFactory {

    public static function make($data)
    {
        //$data
        //[
        //    'driver'  => [
        //        'type' => 'dropbox-link',
        //        'data' => ''
        //    ],
        //    'data'    => '',
        //    'name'    => '',
        //    'alt'     => '',
        //    'caption' => '',
        //];

        $driver = App::make($data['driver']);
        $driver->processImage($data['data']);
        $paths = $driver->getPaths();


        $obj = new Image();
        $obj->addName($data['name'])
            ->addAlt($data['alt'])
            ->addCaption($data['caption'])
            ->addPaths($paths);
        dd($data);

        return $obj;

    }
}