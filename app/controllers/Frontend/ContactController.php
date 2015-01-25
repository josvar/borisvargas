<?php namespace Frontend;

use Laracasts\Commander\CommanderTrait;
use Response;
use View;

class ContactController extends \BaseController {

    use CommanderTrait;


    function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function contact()
    {
        return View::make('frontend.contact');
    }


    public function feedback()
    {
        try
        {
            $this->execute('Chenkacrud\Feedback\SendFeedbackCommand');
        } catch (\Exception $e)
        {
            return Response::json([
                'error' => [
                    'message' => 'Invalid fields'
                ]
            ], 400);
        }

        return Response::json([
            'success' => [
                'message' => 'Message Sent'
            ]
        ], 200);

    }

}