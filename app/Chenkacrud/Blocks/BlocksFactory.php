<?php namespace Chenkacrud\Blocks;

use Chenkacrud\Blocks\Exceptions\InvalidClassBlockName;

class BlocksFactory {

    protected $namespaceBlocks;

    function __construct($namespaceBlocks)
    {
        $this->namespaceBlocks = $namespaceBlocks;
    }

    public function make($type, $data)
    {
        $type = $this->namespaceBlocks . $type . 'Factory';

        if (!class_exists($type))
            throw new InvalidClassBlockName('No existe clase ' . $type);

        return $type::make($data);
    }

    public function hydrate($type, $data)
    {
        $type = $this->namespaceBlocks . $type;
        if (!class_exists($type))
            throw new InvalidClassBlockName();

        return $type::hydrate($data);
    }
}