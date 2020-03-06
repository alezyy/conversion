<?php

namespace App\Http\Controllers\Superbackend;

use App\Http\Controllers\Controller;
use App\Helpers\DataArrayHelper;

class TypeQpController extends Controller
{
    public function indexTypeQp()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.type_quickpresse.index')->with('languages', $languages);
    }

    public function createTypeQp()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.type_quickpresse.add')
            ->with('languages', $languages);
    }
}
