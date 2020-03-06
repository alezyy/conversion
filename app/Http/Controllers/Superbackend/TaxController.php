<?php

namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;
use App\Models\Tax;

class TaxController extends Controller
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

    public function indexTax()
    {
        return view('super_backend.tax_setting.index');
    }

    public function createTax()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();

        return view('super_backend.tax_setting.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }
}
