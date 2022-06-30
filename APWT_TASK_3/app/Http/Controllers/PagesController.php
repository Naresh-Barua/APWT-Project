<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function index(){

        $welcome = "Welcome";

        return view('hello')->with('welcome', $welcome);
    }


    public function contactus(){
        
        
       
        return view('contactus');
        
        
        
        
    }
}
