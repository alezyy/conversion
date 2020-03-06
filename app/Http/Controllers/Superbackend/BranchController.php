<?php

namespace App\Http\Controllers\Superbackend;

use App\Helpers\DataArrayHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
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

    public function indexBranches()
    {
        return view('super_backend.branch.index');
    }

    public function indexUserBranches()
    {
        return view('super_backend.branch.index_user');
    }

    public function indexContractsBranches()
    {
        return view('super_backend.branch.index_contract');
    }

    public function createBranch()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.branch.add')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function createUserBranch()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.branch.add_user')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function createContractBranch()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = ['pack1', 'pack2'];
        //$packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('super_backend.branch.add_contract')
            ->with('countries', $countries)
            ->with('industries', $industries)
            ->with('ownershipTypes', $ownershipTypes)
            ->with('packages', $packages);
    }

    public function sortBranches()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.branch.sort')->with('languages', $languages);
    }
}
