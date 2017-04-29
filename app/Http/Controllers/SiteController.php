<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
	public function getHome()
	{
		# code...
		return view('pages.home');
	}

	public function getAbout()
	{
		/*dd($username);*/
		# code...
		return view('pages.about');
	}

	public function getHealth1()
	{
		return view('pages.health1');
	}
	/*public function getContact()
	{
		# code...
		return view('pages.contact');
	}

	
	processing the contact form
	

	public function postContact(Request $request)
	{
		# code...
		dd($request->all());

	}*/


}
