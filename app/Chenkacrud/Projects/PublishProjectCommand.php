<?php namespace Chenkacrud\Projects;

class PublishProjectCommand {

    /**
     * @var
     */
    public $main;

    /**
     * @var
     */
    public $seo_tags;

    /**
     * @var
     */
    public $blocks;

    /**
     * @param $main
     * @param $blocks
     * @param $seo_tags
     */
    function __construct($main, $blocks, $seo_tags)
    {
        $this->main = $main;
        $this->blocks = $blocks;
        $this->seo_tags = $seo_tags;
    }
}