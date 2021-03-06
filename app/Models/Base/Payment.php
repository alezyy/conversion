<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'company_name'=>'string',
    'branch_name'=>'string',
    'amount'=>'decimal',
    'branch_id'=>'integer',
    'user_id'=>'integer',
    'company_id'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime',
    'billing_id'=>'integer'
  ];
  public function billing()
  {
    return $this->belongsTo('\App\Models\Billing','billing_id','id');
  }
}
