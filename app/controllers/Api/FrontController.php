<?php namespace Api;

use Illuminate\Support\Facades\Config;
use Response;
use View;

class FrontController extends \BaseController {

    //public function getSection($name)
    //{
    //    $viewName = 'frontend.partials.sections.' . $name;
    //    $siteName = 'Boris\' Portfolio';
    //    //validate view name
    //
    //    $view = View::make($viewName)->render();
    //    if ($name == 'home')
    //        $title = $siteName;
    //    else
    //        $title = $siteName . ' - ' . ucfirst($name);
    //
    //    return Response::json(array('title' => $title, 'path' => '', 'html' => $view));
    //}

    public function getPreview($id)
    {
        $projectsStatic = Config::get('projects');
        if (isset($projectsStatic[$id]))
        {
            $projectData = $projectsStatic[$id];
            $title = $projectData['title'];
            $type = $projectData['category'];
            $img = asset($projectData['thumb']);
            $desc = $projectData['text'];

            return Response::json(array(
                'link'  => $id,
                'title' => $title,
                'type'  => $type,
                'img'   => $img,
                'desc'  => $desc
            ), 200);
        } else
        {
            return Response::json(array(
                'error' => [
                    'message' => 'Project does not exist'
                ]
            ), 404);
        }

    }

}
