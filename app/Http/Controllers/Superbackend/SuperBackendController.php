<?php

namespace App\Http\Controllers\SuperBackend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

/**
 * Class SuperBackendController
 * @package App\Http\Controllers\SuperBackend
 */
class SuperBackendController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        $today = Carbon::now();
        // All variable will be in settings table
        $site_logo = 'http://quickpresse.com/themes/logimonde/assets/images/quickpresse.svg';
        $site_name = '';
        $totalTodaysUsers = 0;
        $totalActiveUsers = 0;
        $totalVerifiedUsers = 0;
        $totalTodaysEblast = 0;
        $totalActiveEblast = 0;
        $totalContract = 0;


        return view('super_backend.home')
            ->with('site_name', $site_name)
            ->with('totalTodaysUsers', $totalTodaysUsers)
            ->with('totalActiveUsers', $totalActiveUsers)
            ->with('totalVerifiedUsers', $totalVerifiedUsers)
            ->with('totalTodaysEblast', $totalTodaysEblast)
            ->with('totalActiveEblast', $totalActiveEblast)
            ->with('totalContract', $totalContract);
    }
}
