<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    function home($name,$id){
        return view('welcome')->with(compact('name','id'));
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}
 