<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicController extends Controller
{

    public function welcome(){
        return view('public.welcome');
    }

    public function pricing(){
        return view('public.pricing');
    }

    public function contact(){
        return view('public.contact');
    }
}


