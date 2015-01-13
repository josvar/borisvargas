<?php namespace Chenkacrud\Facades;

use Illuminate\Support\Facades\Facade;

class Blocks extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'blocks.factory';
    }

}