<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Scientific publications';
        return view ('pages.index', ['title' => $title]);
            }
            public function about(){
                return view('pages.about');
            }
            public function services(){
                return view('pages.services');
            }
}
