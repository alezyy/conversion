<?php

namespace App\Http\Controllers\Superbackend;

use DB;
use Input;
use Redirect;
use App\Models\Package;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Requests\PackageFormRequest;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexPackages()
    {
        return view('super_backend.package.index');
    }

    public function createPackage()
    {
        return view('super_backend.package.add');
    }
}
