<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait UserTrait{
    private function createUser($data){
        $user = User::create([
            'username'=>$data['email'],
            'first_name'=>$data['firstName'],
            'last_name'=>$data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'title'=>$data['title'],
            'province_id'=>$data['province'],
            'city'=>$data['city'],
            'role_id'=>1,
            'language'=>$data['lang'],
            'phone'=>$data['phone'],
            'extension'=>$data['ext'],
            'street_addr'=>$data['address'],
            'is_activated'=>0
        ]);
        return $user;
    }
}
