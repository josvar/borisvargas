<?php namespace Chenkacrud\Projects;

use Illuminate\Support\Facades\Validator;

class PublishProjectValidator {

    protected static $rules = [
        'main.title' => 'required'
    ];

    public function validate(PublishProjectCommand $command)
    {
        $data['main'] = $command->main;
        $data['blocks'] = $command->blocks;
        $data['seo_tags'] = $command->seo_tags;

        $validator = Validator::make($data, static::$rules);

        if ($validator->fails())
        {
            die('validation failed');
        }

    }
}