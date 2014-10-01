<?php namespace Api;

use Response;
use View;

class FrontController extends \BaseController {

    public function getSection( $name )
    {
        $viewName = 'frontend.partials.sections.' . $name ;
        $siteName = 'Boris\' Portfolio';
        //validate view name

        $view = View::make($viewName)->render();
        if($name == 'home')
            $title =  $siteName;
        else
            $title =  $siteName . ' - ' . ucfirst($name);
        return Response::json(array( 'title' => $title , 'path' => '', 'html' => $view ));
    }

}
