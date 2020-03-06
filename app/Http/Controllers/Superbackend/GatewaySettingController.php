<?php

namespace App\Http\Controllers\Superbackend;

use App\Http\Controllers\Controller;
use App\Helpers\DataArrayHelper;

/**
 * Class GatewaySettingController
 * @package App\Http\Controllers\Superbackend
 */
class GatewaySettingController extends Controller
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

    final public function editGatewaySetting() :string
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.gateway_merchant.index')->with('languages', $languages);
    }

    public function createGatewaySetting()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.gateway_merchant.add')
            ->with('languages', $languages);
    }
}

