<?php

namespace App\Http\Controllers\Superbackend;

use App\Http\Controllers\Controller;

class SiteSettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function editSiteSetting()
    {
        return view('super_backend.site_setting.edit');
    }
}

