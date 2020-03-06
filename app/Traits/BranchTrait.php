<?php

namespace App\Traits;
use App\Models\Branch;
trait BranchTrait{

    private  function createBranch($company){
        $branch = Branch::create([
            'name'=>$company->name,
            'company_id'=>$company->id,
            'address'=>$company->address,
            'province_id'=>$company->province_id,
            'city'=>$company->city,
            'postal_code'=>$company->postal_code,
            'active'=>1,
            'logo_file_en'=>$company->logo_file_en,
            'logo_file_fr'=>$company->logo_file_fr
        ]);
        return $branch;
    }
}
