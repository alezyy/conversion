<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'name_en'=>'string',
    'name_fr'=>'string',
    'published'=>'integer',
    'language'=>'string',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function pricingLots()
  {
    return $this->hasMany('\App\Models\Pricing_lot','product_id','id');
  }
}
