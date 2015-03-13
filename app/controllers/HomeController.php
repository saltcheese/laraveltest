<?php

class HomeController extends BaseController {

	/*
route
	*/

	public function getIndex()
	{
		return View::make('home');
	}

}
