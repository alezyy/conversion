<?php

namespace App\Traits;

use DB;
use File;
use ImgUploader;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Company;

trait CompanyTrait
{
    //
    private function createCie($data,$logos){
        $company = Company::create([
            'industry_id'=>1,
            'name'=>$data['companyName'],
            'address'=>$data['address'],
            'country_id'=>$data['country'],
            'province_id'=>$data['province'],
            'city'=>$data['city'],
            'postal_code'=>$data['postalcode'],
            'active'=>1,
            'phone'=>$data['phone'],
            'logo_file_en'=>$logos['en_logo'],
            'logo_file_fr'=>$logos['fr_logo']
        ]);
        return $company;
    }
}
