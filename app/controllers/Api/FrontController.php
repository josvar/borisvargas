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
        return Response::json(array( 'title' => $siteName . ' - ' . ucfirst($name) ,
                                     'path' => '', 'html' => $view ));
    }

}
