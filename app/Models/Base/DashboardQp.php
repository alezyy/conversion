<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class DashboardQp extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'displayed'=>0,
    'elastic'=>0,
    'admin_fetch'=>0
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'branch_id'=>'integer',
    'date_requested'=>'datetime',
    'slug'=>'string',
    'date_required'=>'datetime:Y-m-d',
    'time_required'=>'datetime:H:i:s',
    'status'=>'integer',
    'ip_address'=>'string',
    'server'=>'integer',
    'approved'=>'integer',
    'displayed'=>'integer',
    'elastic'=>'integer',
    'admin_fetch'=>'integer',
    'date_send'=>'datetime',
    'sent_final_at'=>'datetime',
    'date_elastic_send'=>'datetime',
    'views'=>'integer',
    'recipients'=>'integer',
    'total_subs_normal'=>'integer',
    'total_subs_elastic'=>'integer',
    'outlook'=>'integer',
    'title'=>'string',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function branch()
  {
    return $this->belongsTo('\App\Models\Branch','branch_id','id');
  }
}
