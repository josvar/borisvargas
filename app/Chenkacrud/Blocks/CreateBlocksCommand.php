<?php namespace Chenkacrud\Blocks;

class CreateBlocksCommand {

    public $blocks;

    /**
     * @param $blocks
     */
    public function __construct($blocks)
    {
        $this->blocks = $blocks;
    }

}