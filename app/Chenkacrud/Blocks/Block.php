<?php namespace Chenkacrud\Blocks;

use Chenkacrud\Persistence\Serializable;

abstract class Block implements Serializable {

    protected $type;

    function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}
