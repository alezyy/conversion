<?php

namespace App\Http\Controllers\Superbackend;

use Hash;
use File;
use ImgUploader;
use Auth;
use DB;
use Input;
use Redirect;
use App\Package;
use App\Company;
use Carbon\Carbon;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Controllers\Controller;
use App\Traits\CompanyTrait;

class CompanyController extends Controller
{

    use CompanyTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexCompanies()
    {
        return view('super_backend.company.index');
    }

    public function createCompany()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.company.add')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function indexUserCompanies()
    {
        return view('super_backend.company.index_user');
    }

    public function indexContractsCompanies()
    {
        return view('super_backend.company.index_contract');
    }

    public function createUserCompany()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.company.add_user')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function createContractCompany()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.company.add_contract')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function sortCompanies()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.company.sort')->with('languages', $languages);
    }

    public function makeActiveCompany()
    {
        //
    }

    public function makeNotActiveCompany()
    {
        //
    }

}
