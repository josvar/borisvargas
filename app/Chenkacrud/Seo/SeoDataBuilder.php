<?php namespace Chenkacrud\Seo;

use Chenkacrud\Seo\Meta\Meta;
use Chenkacrud\Seo\Meta\MetaTitle;

class SeoDataBuilder implements BuilderInterface {

    /**
     * @var SeoData
     */
    protected $seoData;

    public function buildSeoData()
    {
        $this->seoData = new SeoData();
    }

    /**
     * @param string $data
     */
    public function hydrate($data)
    {
        $this->seoData = SeoData::hydrate($data);
    }

    /**
     * @param string $title
     */
    public function addTitle($title)
    {
        $this->seoData->setTitle(new MetaTitle($title));
    }

    /**
     * @param array $attributes
     */
    public function addMeta(array $attributes)
    {
        $this->seoData->addMeta(new Meta($attributes));
    }

    /**
     * @return SeoData
     */
    public function getResult()
    {
        return $this->seoData;
    }
}
