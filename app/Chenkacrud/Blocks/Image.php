<?php namespace Chenkacrud\Blocks;

use Chenkacrud\Blocks\Paths\LocalPath;

class Image extends Block {

    /**
     * @var array
     */
    protected $properties = [];

    /**
     * @var array
     */
    protected $paths = [];

    /**
     *
     */
    function __construct()
    {
        parent::__construct('Image');
    }

    /**
     * @param array $paths
     * @return $this
     */
    public function addPaths(array $paths)
    {
        $this->paths = $paths;

        return $this;
    }

    public function addName($name)
    {
        $this->properties['name'] = $name;

        return $this;
    }

    /**
     * @param $alt
     * @return $this
     */
    public function addAlt($alt)
    {
        $this->properties['alt'] = $alt;

        return $this;
    }

    /**
     * @param $caption
     * @return $this
     */
    public function addCaption($caption)
    {
        $this->properties['caption'] = $caption;

        return $this;
    }

    /**
     *
     */
    public function removeCaption()
    {
        $this->properties['caption'] = '';
    }

    /**
     * @return bool
     */
    public function hasCaption()
    {
        if (isset($this->properties['caption']))
            return ($this->properties['caption'] == '');

        return false;
    }

    /**
     * @param string $type
     * @return mixed
     */
    public function getPath($type = '')
    {
        return $this->paths[$type]->getPath();
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

        foreach ($this->paths as $path)
        {
            $data['paths'][] = $path->jsonSerialize();
        }

        return $data;
    }


    /**
     * @param $data
     * @return Image
     */
    static public function hydrate($data)
    {
        $obj = new self();
        $obj->properties = $data['properties'];

        foreach($data['paths'] as $path) {
            $obj->paths[] = LocalPath::hydrate($path);
        }

        return $obj;
    }
}
