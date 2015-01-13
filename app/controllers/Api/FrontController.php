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
        $title = 'Studio Brochure Template';
        $type = 'Print templates';
        $img = asset('assets/images/projects/ex' . $id . '-thumb.jpg');
        $desc = 'This 24 page indesign A4 brochure template has been created with designers and agencies in mind.This template is a brochure with space to give a little extra information about your company, some facts and figures and also some infographics. All Files are print ready.';

        return Response::json(array(
            'title' => $title,
            'type'  => $type,
            'img'   => $img,
            'desc'  => $desc
        ));
    }

}
