<?php

namespace App\Http\Controllers\Client\Register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\EmailTrait;
use App\Traits\ProvinceTrait;
class RegisterAjaxController extends Controller
{
    use EmailTrait;
    use ProvinceTrait;
    //
    function email(Request $request){
        return $this->emailExist($request);
    }

    function provinces($id){
        return $this->getProvincesByCountryId($id);
    }
}
