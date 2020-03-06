<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Country;

class RegFrmCountriesComposer{

    public function compose(View $view){
        $view->with('countries',Country::all());
    }
}
