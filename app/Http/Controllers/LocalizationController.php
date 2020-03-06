<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    public function setLocale(Request $request)
    {
        $locale = $request->input('locale');
        $return_url = $request->input('return_url');
        session(['locale' => $locale]);
        setcookie('locale',$locale,time()+(86400 * 366),'/');
        return Redirect::to($return_url);
    }
}
