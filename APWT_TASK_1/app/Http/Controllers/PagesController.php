<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $welcome = "Welcome";

        return view('hello')->with('welcome', $welcome);
    }

    public function service(){
        $name = "Mr. Naresh";
        $id="19-40332-1";
        $names=array("Bike", "Car",  "Delivery");
        return view('service')
        ->with('name', $name)
        ->with('id', $id)
        
        ->with('names', $names);
    }

    public function ourteam(){
        
        
       
        return view('ourteam');
        
        
        
        
    }

    public function aboutus(){
        
        
       
        return view('aboutus');
        
        
        
        
    }

    public function contactus(){
        
        
       
        return view('contactus');
        
        
        
        
    }
}