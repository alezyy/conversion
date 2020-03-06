<?php

namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;

class AgreementController extends  Controller
{
    public function indexAgreement()
    {
        return view('super_backend.agreement.index');
    }

    public function createAgreement()
    {

        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.agreement.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }

    public function indexItemAgreement()
    {
        return view('super_backend.agreement_item.index');
    }

    public function createItemAgreement()
    {

        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.agreement_item.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }
}
