<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
    	return view('etc.about');
    }
    
    function numpang(){
    	return view('welcome');
    }

    function data(){
    	return view('etc.data');
    }

    function form(){
    	return view('etc.form');
    }
}
