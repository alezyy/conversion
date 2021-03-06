<?php namespace Logimonde\QuickPresse\Models;

use Model;

/**
 * Company Model
 */
class Company extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'logimonde_quickpresse_companies';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [

    ];
    public $belongsTo = [
        'city' => ['Logimonde\Quickpresse\Models\City'],
        'state' => ['Logimonde\Quickpresse\Models\Province'],
        'country' => ['Logimonde\Quickpresse\Models\Country'],
    ];

    public static $allowedSortingOptions = array(
        'name asc' => 'Name (ascending)',
        'name desc' => 'Name (descending)',
        'created_at asc' => 'Created (ascending)',
        'created_at desc' => 'Created (descending)',
        'updated_at asc' => 'Updated (ascending)',
        'updated_at desc' => 'Updated (descending)',
        'random' => 'Random'
    );


    public function scopeListCompanies($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page' => 1,
            'perPage' => 30,
            'sort' => 'created_at',
            'search' => '',
            'user' => null,
            'active' => true
        ], $options));

        $searchableFields = ['name', 'address'];

        if ($active) {
            $query->isActive();
        }

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {

            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                if ($sortField == 'random') {
                    $sortField = DB::raw('RAND()');
                }
                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }


        return $query->paginate($perPage, $page);
    }

    public function scopeIsActive($query)
    {
        return $query
            ->whereNotNull('active')
            ->where('active', true);
    }
}
