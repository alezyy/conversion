<?php

namespace App\Traits;

use App\Models\Province;

trait ProvinceTrait{

    private function getProvincesByCountryId($id){
        return Province::where('country_id','=',$id)->get();
    }
}
