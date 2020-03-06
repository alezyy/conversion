<?php

namespace App\Http\Controllers\Superbackend;

use App\Country;
use DB;
use DataTables;
use App\Helpers\DataArrayHelper;
use App\Helpers\MiscHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\CountryStateCity;

class CountryController extends Controller
{
    use CountryStateCity;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexCountries()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.country.index')->with('languages', $languages);
    }

    public function createCountry()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        return view('super_backend.country.add')
            ->with('languages', $languages)
            ->with('countries', $countries);
    }

    public function fetchCountriesData(Request $request)
    {
        $countries = Country::select(['countries.id', 'countries.country',
            'countries.is_active', 'countries.lang', 'countries.created_at', 'countries.updated_at'])->sorted();

        return Datatables::of($countries)
            ->filter(function ($query) use ($request) {
                if ($request->has('country') && !empty($request->country)) {
                    $query->where('countries.country', 'like', "%{$request->get('country')}%");
                }
                if ($request->has('lang') && !empty($request->get('lang'))) {
                    $query->where('countries.lang', 'like', "%{$request->get('lang')}%");
                }
                if ($request->has('is_active') && $request->get('is_active') != -1) {
                    $query->where('countries.is_active', '=', "{$request->get('is_active')}");
                }
            })
            ->addColumn('country', function ($countries) {
                $country = str_limit($countries->country, 100, '...');
                $direction = MiscHelper::getLangDirection($countries->lang);
                return '<span dir="' . $direction . '">' . $country . '</span>';
            })
            ->addColumn('action', function ($countries) {

                $activeTxt = 'Make Active';
                $activeHref = 'makeActive(' . $countries->id . ');';
                $activeIcon = 'square-o';
                if ((int) $countries->is_active === 1) {
                    $activeTxt = 'Make InActive';
                    $activeHref = 'makeNotActive(' . $countries->id . ');';
                    $activeIcon = 'check-square-o';
                }
                return '
				<div class="btn-group">
					<button class="btn blue dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
						<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="' . route('edit.country', ['id' => $countries->id]) . '"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
						</li>						
						<li>
							<a href="javascript:void(0);" onclick="deleteCountry(' . $countries->id . ', ' . $countries->is_default . ');" class=""><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
						</li>
						<li>
						<a href="javascript:void(0);" onClick="' . $activeHref . '" id="onclickActive' . $countries->id . '"><i class="fa fa-' . $activeIcon . '" aria-hidden="true"></i>' . $activeTxt . '</a>
						</li>																																		
					</ul>
				</div>';
            })
            ->rawColumns(['country', 'action'])
            ->setRowId(function($countries) {
                return 'countryDtRow' . $countries->id;
            })
            ->make(true);
    }

    public function sortCountries()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('super_backend.country.sort')->with('languages', $languages);
    }

}
