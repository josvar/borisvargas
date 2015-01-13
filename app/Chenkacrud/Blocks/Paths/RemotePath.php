<?php namespace Chenkacrud\Blocks\Paths;

use Chenkacrud\Persistence\Serializable;

class RemotePath implements Serializable{

    protected $link;

    function __construct($link)
    {
        $this->link = $link;
    }

    public function getPath()
    {
        return $this->link;
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
            'link' => $this->name,
        ];
    }

    public static function hydrate($data)
    {
        return new self($data['link']);
    }
}