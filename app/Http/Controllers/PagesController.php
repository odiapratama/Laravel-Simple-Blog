<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = ('Welcome to My First Web');
        return view('pages.index',compact('title'));
    }
    public function about(){
        $title = ('About Us');
        return view('pages.about',compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Programming', 'Artificial Intelligent', 'Machine Learning']
        );
        return view('pages.services')->with($data);
    }
}
