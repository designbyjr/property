<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register(Request $request){
    	$this->validate($request, [
	        'email' => 'required|max:255|email|not_throw_away',
    	]);

    	return view('thankyou');
    }//end of fn

}//end of class
