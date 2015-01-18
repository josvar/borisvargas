<?php namespace Chenkacrud\Resources;

class ProcessResourceCommand {

    public $resource;
    /**
     */
    public function __construct($resource)
    {
        $this->resource = $resource;
    }

}