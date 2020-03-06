<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class EblastSend extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'status'=>0,
    'elastic'=>0,
    'approved'=>0,
    'displayed'=>0,
    'server'=>0,
    'views'=>0,
    'recipients'=>0,
    'bounces_soft'=>0,
    'bounces_hard'=>0,
    'pages'=>0,
    'shared'=>0,
    'total_subs_normal'=>0,
    'total_subs_elastic'=>0,
    'outlook'=>0,
    'billed'=>0,
    'ip_address'=>'NULL',
    'admin_fetch'=>0,
    'unit_price'=>0.00
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime',
    'eblast_id'=>'integer',
    'slug'=>'string',
    'date_required'=>'datetime:Y-m-d',
    'time_required'=>'datetime:H:i:s',
    'status'=>'integer',
    'date_send'=>'datetime',
    'date_elastic_send'=>'datetime',
    'sent_final_at'=>'datetime',
    'sent_final_elastic_at'=>'datetime',
    'elastic'=>'integer',
    'approved'=>'integer',
    'displayed'=>'integer',
    'server'=>'integer',
    'views'=>'integer',
    'recipients'=>'integer',
    'bounces_soft'=>'integer',
    'bounces_hard'=>'integer',
    'pages'=>'integer',
    'shared'=>'integer',
    'total_subs_normal'=>'integer',
    'total_subs_elastic'=>'integer',
    'outlook'=>'integer',
    'billed'=>'integer',
    'ip_address'=>'string',
    'admin_fetch'=>'integer',
    'unit_price'=>'decimal'
  ];
  public function eblast()
  {
    return $this->belongsTo('\App\Models\Eblast','eblast_id','id');
  }
}