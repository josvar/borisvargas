<?php namespace Chenkacrud;

use Chenkacrud\Blocks\BlocksContainer;
use Chenkacrud\Persistence\JsonEngine;
use Eloquent;
use Illuminate\Support\Facades\App;

class Project extends Eloquent {

    use JsonEngine;

    protected $fillable = ['title', 'slug', 'summary', 'blocks'];

    public static function publish($title, $summary, $blocks)
    {
        $project = new static(compact('title', 'summary', 'blocks'));
        $project->save();

        return $project;
    }

    public function getBlocksAttribute($blocks)
    {
        $blocks = $this->jsonDecode($blocks);

        return BlocksContainer::hydrate($blocks, App::make('Chenkacrud\Blocks\BlocksFactory'));
    }

    public function setBlocksAttribute($blocks)
    {
        $this->attributes['blocks'] = $this->jsonEncode($blocks);
    }

    public function seo()
    {
        return $this->morphOne('Chenkacrud\Seo', 'seoable');
    }
}