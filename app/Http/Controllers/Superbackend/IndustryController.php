<?php


namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;
use App\Models\Industry;

class IndustryController extends Controller
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

    public function indexIndustries()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.industry.index')->with('languages', $languages);
    }

    public function createIndustry()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        return view('super_backend.industry.add')
            ->with('languages', $languages)
            ->with('industries', $industries);
    }

    public function fetchIndustriesData(Request $request)
    {
        //
    }

    public function deleteIndustry(Request $request)
    {
        //
    }

    public function sortIndustries()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.industry.sort')->with('languages', $languages);
    }

}

