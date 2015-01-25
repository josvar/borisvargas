<?php namespace Frontend;

use View, Config, Redirect;

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

}
