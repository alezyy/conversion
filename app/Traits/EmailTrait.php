<?php

namespace App\Traits;

use App\Models\User;

trait EmailTrait{

    private function emailExist($request){
        $user = User::where('email','=',$request->email)->get();
        if(sizeof($user)>1){
            return 1;
        }
        return 0;
    }
}
