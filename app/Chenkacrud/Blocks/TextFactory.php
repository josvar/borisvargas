<?php namespace Chenkacrud\Blocks;

class TextFactory {

    /**
     * @param $data
     * @return Text
     */
    public static function make($data)
    {
        $obj = new Text();
        return $obj->addText($data['text']);
    }
}