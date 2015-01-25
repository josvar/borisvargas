<?php namespace Chenkacrud\Feedback;

use Validator;

class SendFeedbackValidator {

    protected static $rules = [
        'name'    => 'required',
        'email'   => 'required',
        'message' => 'required'
    ];

    public function validate(SendFeedbackCommand $command)
    {
        $validator = Validator::make([
            'name'    => $command->name,
            'email'   => $command->email,
            'message' => $command->message
        ], static::$rules);

        if ($validator->fails())
        {
            throw new \Exception;
        }
    }

}