<?php namespace Chenkacrud\Seo\Meta;

use Chenkacrud\Persistence\Serializable;
use InvalidArgumentException;

class MetaTitle implements Serializable {

    /**
     * @var string
     */
    protected $title;

    /**
     * @param $title
     */
    function __construct($title)
    {
        if (!is_string($title)) throw new InvalidArgumentException();
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
        return $this->title;
    }

    /**
     * @param $title
     * @return mixed
     */
    static public function hydrate($title)
    {
        return new self($title);
    }
}