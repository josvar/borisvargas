<?php namespace Api;

use Response;
use View;

class FrontController extends \BaseController {

    public function getSection($name)
    {
        $viewName = 'frontend.partials.sections.' . $name;
        $siteName = 'Boris\' Portfolio';
        //validate view name

        $view = View::make($viewName)->render();
        if ($name == 'home')
            $title = $siteName;
        else
            $title = $siteName . ' - ' . ucfirst($name);

        return Response::json(array('title' => $title, 'path' => '', 'html' => $view));
    }

    public function getPreview($id)
    {
        $title = 'Project Version: ' . $id;
        $img = asset('assets/images/projects/ex1-thumb.jpg');
        $desc = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto consectetur cumque deserunt dolores enim eos incidunt neque non nulla, odio optio perferendis tempora veniam voluptate! Accusamus dolorum ipsa soluta! Incidunt neque non nulla, odio optio perferendis tempora veniam voluptate! Accusamus dolorum ipsa soluta!';

        return Response::json(array(
            'title'   => $title,
            'img_src' => $img,
            'desc'    => $desc
        ));
    }

}
