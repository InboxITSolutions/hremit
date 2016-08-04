<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller{

	public function index(){
		return view('web.index');
	}
	public function getAbout(){
		return view('web.pages.about');
	}
	public function getContact(){
		return view('web.pages.contact');
	}
	public function getGallery(){
		return view('web.pages.gallery');
	}
	public function getMedia(){
		return view('web.pages.media');
	}
<<<<<<< HEAD
	public function getAgents(){
		return view('web.pages.agents');
	}
	public function getDistrict(){
		return view('web.includes.fetch-district');
	}
=======
>>>>>>> a02be301d35b8528f79a85647ef65d1ae806da76
}