<?php namespace Chenkacrud\Blocks;

class Text extends Block {

    protected $properties = [];

    function __construct()
    {
        parent::__construct('Text');
    }

    public function addText($text)
    {
        $this->properties['text'] = $text;
        return $this;
    }

    public function getText()
    {
        return $this->properties['Text'];
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
        $data['type'] = $this->type;
        $data['properties'] = $this->properties;

        return $data;
    }

    /**
     * @param $data
     * @return mixed
     */
    static public function hydrate($data)
    {
        $obj = new self();
        $obj->properties = $data['properties'];

        return $obj;
    }
}