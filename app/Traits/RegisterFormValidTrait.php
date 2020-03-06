<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait RegisterFormValidTrait{
    private function validateRegisterForm($data){
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'lang'=>['required','string'],
            'firstName'=>['required','string'],
            'lastName'=>['required','string'],
            'phone'=>['required','string'],
            'en-logo'=>['required','image'],
            'fr-logo'=>['required','image'],
            'companyName'=>['required','string'],
            'address'=>['required','string'],
            'city'=>['required','string'],
            'province'=>['required','numeric'],
            'country'=>['required','numeric'],
            'postalcode'=>['required','string']
        ]);
    }
}
