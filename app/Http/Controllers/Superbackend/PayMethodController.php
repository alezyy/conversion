<?php

namespace App\Http\Controllers\Superbackend;


use App\Helpers\DataArrayHelper;
use App\Http\Controllers\Controller;

class PayMethodController extends Controller
{
    public function indexMethods()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.pay_method.index')->with('languages', $languages);
    }

    public function createMethod()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.pay_method.add')
            ->with('languages', $languages);
    }
}
