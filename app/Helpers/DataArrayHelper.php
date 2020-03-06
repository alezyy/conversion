<?php

namespace App\Helpers;

use App\Country;
use App\Models\Industry;
use App\OwnershipType;
use Request;
use App\Language;


/**
 * Class DataArrayHelper
 * @package App\Helpers
 */
class DataArrayHelper
{
    /**
     * @return array
     */
    public static function languagesNativeCodeArray()
    {
        return ['en', 'fr'];
    }

    public static function defaultCountriesArray()
    {
         $array = ['Usa', 'Canada'];
        //$array = Country::select('countries.country', 'countries.country_id')->isDefault()->active()->sorted()->pluck('countries.country', 'countries.country_id')->toArray();
        return $array;
    }

    public static function defaultIndustriesArray()
    {
        $array = ['tes1', 'bs'];
        //$array = Industry::select('industries.industry', 'industries.industry_id')->isDefault()->active()->sorted()->pluck('industries.industry', 'industries.industry_id')->toArray();
        return $array;
    }

    public static function defaultOwnershipTypesArray()
    {
        $array = ['testo', 'testown'];
        //$array = OwnershipType::select('ownership_types.ownership_type', 'ownership_types.ownership_type_id')->isDefault()->active()->sorted()->pluck('ownership_types.ownership_type', 'ownership_types.ownership_type_id')->toArray();
        return $array;
    }

}
