<?php

namespace App\Traits;
use App\Models\BranchHasUser;
trait BranchHasUserTrait{

    private function createBranchHasUser($user,$branch){
        $branchHasUser = BranchHasUser::create([
            'branch_id'=>$branch->id,
            'user_id'=>$user->id
        ]);
        return $branchHasUser;
    }
}
