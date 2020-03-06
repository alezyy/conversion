<?php

namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;
use App\Models\Province;

class ProvinceController extends Controller
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

    public function indexProvinces()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.province.index')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }

    public function createProvince()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.province.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }

    public function sortProvince()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.province.sort')->with('languages', $languages);
    }
}
