<?php namespace Frontend;

use View;

class FrontController extends \BaseController {

	public function getIndex()
	{
		return View::make('frontend.home');
	}

    public function getContact()
    {
        return View::make('frontend.contact');
    }



}
