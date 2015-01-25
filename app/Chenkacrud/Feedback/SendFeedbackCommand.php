<?php namespace Chenkacrud\Feedback;

class SendFeedbackCommand {

    public $name;
    public $email;
    public $message;

    /**
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

}