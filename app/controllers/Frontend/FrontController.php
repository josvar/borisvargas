<?php namespace Frontend;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Redirect;
use View, Config;

class FrontController extends \BaseController {

    public function home()
    {
        $projectsStatic = Config::get('projects');

        return View::make('frontend.home-static', array('projects' => $projectsStatic));
    }
    public function about()
    {
        return View::make('frontend.about');
    }

    public function contact()
    {
        return View::make('frontend.contact');
    }

    public function projects($nameProject)
    {
        $projectsStatic = Config::get('projects');
        if (isset($projectsStatic[$nameProject]))
        {
            $projectData = $projectsStatic[$nameProject];

            return View::make('frontend.project-static', array('project' => $projectData));
        } else
        {

        }

        //tododev: thrown warning msg
        return Redirect::to('/');
    }


    public function feedback()
    {
        Mail::send('emails.feedback', [
            'name'   => Input::get('name'),
            'email' => Input::get('email'),
            'body'   => Input::get('message'),

        ], function ($message)
        {
            $message->from('feedback@borisvargas.com', Input::get('name') );
            $message->to('feedback@borisvargas.com')->subject('New Feedback from ' . Input::get('name'));

        });

        return Redirect::back();
    }
}
