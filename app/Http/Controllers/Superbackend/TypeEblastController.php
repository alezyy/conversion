<?php


namespace App\Http\Controllers\Superbackend;

use App\Http\Controllers\Controller;
use App\Helpers\DataArrayHelper;

class TypeEblastController extends Controller
{
    public function indexTypeEblast()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.type_contenu_eblast.index')->with('languages', $languages);
    }

    public function createTypeEblast()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.type_contenu_eblast.add')
            ->with('languages', $languages);
    }
}
