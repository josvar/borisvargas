<?php namespace Chenkacrud;

use Chenkacrud\Facades\SeoData;
use Chenkacrud\Persistence\JsonEngine;
use Eloquent;

class Seo extends Eloquent {

    use JsonEngine;

    protected $table = 'seo';

    protected $fillable = ['data'];

    public function seoable()
    {
        return $this->morphTo();
    }

    public function getDataAttribute($data)
    {
        $data = $this->jsonDecode($data);

        return SeoData::restore($data);
    }

    public function setDataAttribute($data)
    {
        $this->attributes['data'] = $this->jsonEncode($data);
    }
}