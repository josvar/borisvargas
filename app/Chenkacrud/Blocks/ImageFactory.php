<?php namespace Chenkacrud\Blocks;

use Illuminate\Support\Facades\App;

class ImageFactory {

    public static function make($data)
    {
        //$data
        //[
        //    'driver'  => '',
        //    'data'    => '',
        //    'alt'     => '',
        //    'caption' => '',
        //];

        $pathsFactory = $data['driver'] . '-paths';
        $pathsFactory = App::make($pathsFactory);

        $paths = $pathsFactory->generate($data);

        $obj = new Image();
        $obj->addAlt($data['alt'])
            ->addCaption($data['caption'])
            ->addPaths($paths);

        return $obj;

    }
}