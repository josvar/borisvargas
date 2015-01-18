<?php namespace Chenkacrud\Seo\Meta;

use Chenkacrud\Persistence\Serializable;
use InvalidArgumentException;

class Meta implements Serializable {

    static protected $acceptableMetasProperty = [
        'description',
        'og:title',
        'og:description',
        'og:type',
        'og:image',
        'twitter:card',
        'twitter:site',
        'twitter:title',
        'twitter:description',
        'twitter:image',
        'twitter:url'
    ];

    /**
     * @var array
     */
    protected $attributes;

    /**
     * Create a new Meta instance. Los valores de los attributos solo pueden ser string
     *
     * @param array $attributes
     */
    function __construct(array $attributes = [])
    {
        $this->disallowInvalidMeta($attributes);

        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
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
        return $this->attributes;
    }

    /**
     * @param $data
     * @return mixed
     */
    static public function hydrate($data)
    {
        return new self($data);
    }

    /**
     * @param array $attributes
     */
    protected function disallowInvalidMeta(array $attributes)
    {
        foreach ($attributes as $attr => $value)
        {
            if (!is_string($attr) || !(is_string($value)))
                throw new InvalidArgumentException('It does not string');

        }

        ////tododev: refactor this
        //if (!in_array($attributes['name'], self::$acceptableMetasProperty))
        //{
        //    throw new InvalidArgumentException('Seo property invalid');
        //}
        //if (!in_array($attributes['property'], self::$acceptableMetasProperty))
        //{
        //    throw new InvalidArgumentException('Seo property invalid');
        //}
    }
}