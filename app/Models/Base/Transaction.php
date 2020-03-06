<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=['billing_id'=>0];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'user_id'=>'integer',
    'company_id'=>'integer',
    'branch_id'=>'integer',
    'company_name'=>'string',
    'product_name'=>'string',
    'lot_name'=>'string',
    'mount'=>'decimal',
    'tps'=>'float',
    'tvq'=>'float',
    'total'=>'float',
    'gateway'=>'string',
    'description'=>'string',
    'created_at'=>'datetime',
    'updated_at'=>'datetime',
    'product_id'=>'integer',
    'pricing_lot_id'=>'integer',
    'billing_id'=>'integer',
    'payment_id'=>'integer',
    'type_qp_id'=>'integer'
  ];
}
