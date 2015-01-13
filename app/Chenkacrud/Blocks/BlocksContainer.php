<?php namespace Chenkacrud\Blocks;

use Chenkacrud\Persistence\Serializable;

class BlocksContainer implements Serializable {

    protected $blocks = [];

    public function addBlock($block)
    {
        $this->blocks[] = $block;
    }

    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @param $data
     * @param array $factory
     * @return mixed
     * @throws MissingFactoryException
     */
    static public function hydrate($data, $factory = null)
    {
        if ($factory === null)
            throw new MissingFactoryException();

        $container = new self();
        foreach ($data as $blockData)
        {
            $type = $blockData['type'];
            $container->addBlock($factory->hydrate($type, $blockData));
        }

        return $container;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        $blockSerialized = [];
        foreach ($this->blocks as $block)
        {
            $blockSerialized[] = $block->jsonSerialize();
        }

        return $blockSerialized;
    }
}