<?php

namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
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

    public function indexProducts()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.product.index')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }

    public function createProduct()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.product.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }
}
