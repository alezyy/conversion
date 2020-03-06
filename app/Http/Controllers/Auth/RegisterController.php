<?php

namespace App\Http\Controllers\Auth;

use App\Traits\BranchHasUserTrait;
use App\Traits\BranchTrait;
use App\Traits\CompanyTrait;
use App\Traits\RegisterFormValidTrait;
use App\Traits\UploadImageTrait;
use App\Http\Controllers\Controller;
use App\Traits\UserTrait;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use RegisterFormValidTrait;
    use UserTrait;
    use CompanyTrait;
    use UploadImageTrait;
    use BranchTrait;
    use BranchHasUserTrait;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return $this->validateRegisterForm($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = $this->createUser($data);
        $logos = array(
            'en_logo'=>$this->upload($data['en-logo']),
            'fr_logo'=>$this->upload($data['fr-logo'])
        );
        $company = $this->createCie($data,$logos);
        $branch = $this->createBranch($company);
        $this->createBranchHasUser($user,$branch);
        return $user;
    }
}
