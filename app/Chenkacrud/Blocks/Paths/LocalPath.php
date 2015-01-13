<?php namespace Chenkacrud\Blocks\Paths;

use Chenkacrud\Persistence\Serializable;

class LocalPath implements Serializable{

    protected $name;
    protected $base;

    function __construct($name, $base)
    {
        $this->name = $name;
        $this->base = $base;
    }

    public function getPath()
    {
        return public_path() . $this->base . $this->name;
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
        return [
            'name' => $this->name,
            'base' => $this->base,
        ];
    }

    public static function hydrate($data)
    {
        return new self($data['name'], $data['base']);

    }
}