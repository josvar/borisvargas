<?php namespace Chenkacrud\Seo;

use Chenkacrud\Persistence\Serializable;
use Chenkacrud\Seo\Exceptions\SeoWithoutTitleException;
use Chenkacrud\Seo\Meta\Meta;
use Chenkacrud\Seo\Meta\Title;

class SeoData implements Serializable {

    /**
     * @var Title
     */
    protected $title;
    protected $metas = array();

    function __construct()
    {
    }

    /**
     * @param Title $title
     */
    public function setTitle(Title $title)
    {
        $this->title = $title;
    }

    /**
     * @param Meta $meta
     */
    public function addMeta(Meta $meta)
    {
        $this->metas[] = $meta;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @throws SeoWithoutTitleException
     */
    function jsonSerialize()
    {
        if ($this->title === null) throw new SeoWithoutTitleException();

        $data = array();
        $data['title'] = $this->title->jsonSerialize();
        $data['metas'] = [];

        foreach ($this->metas as $meta)
        {
            $data['metas'][] = $meta->jsonSerialize();
        }

        return $data;

    }

    /**
     * @param $data
     * @return SeoData
     */
    static public function hydrate($data)
    {
        $seoDataObj = new self();

        $seoDataObj->title = Title::hydrate($data['title']);
        foreach ($data['metas'] as $meta)
        {
            $seoDataObj->addMeta(Meta::hydrate($meta));
        }

        return $seoDataObj;
    }

}