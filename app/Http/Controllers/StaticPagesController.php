<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Status;
use Auth;

class StaticPagesController extends Controller
{
    //static pages
	
	public function home(){
		$feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static-pages/home', compact('feed_items'));
	}
	
	public function help(){
		return view('static-pages/help');
	}
	
	public function about(){
		return view('static-pages/about');
	}
}
