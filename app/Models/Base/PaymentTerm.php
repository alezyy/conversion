<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class PaymentTerm extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'is_invoice_send'=>0,
    'is_paid'=>0,
    'is_active'=>1
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'contract_id'=>'integer',
    'amount'=>'double',
    'due_date'=>'datetime:Y-m-d',
    'is_invoice_send'=>'integer',
    'is_paid'=>'integer',
    'is_active'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function contract()
  {
    return $this->belongsTo('\App\Models\Contract','contract_id','id');
  }
  public function billings()
  {
    return $this->hasMany('\App\Models\Billing','payment_term_id','id');
  }
}
