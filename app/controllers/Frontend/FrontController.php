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

    public function getServices()
    {
        return View::make('frontend.services');
    }

    public function getAbout()
    {
        return View::make('frontend.about');
    }

    public function getWork()
    {
        return View::make('frontend.work');
    }

}
