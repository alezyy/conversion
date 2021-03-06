<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class EblastDetail extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'show_qp_section'=>0,
    'active'=>0,
    'language'=>' '
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'eblast_id'=>'integer',
    'title'=>'string',
    'informations'=>'string',
    'notes'=>'string',
    'period_show'=>'integer',
    'show_qp_section'=>'integer',
    'admin_notes'=>'string',
    'sender_name'=>'string',
    'total_cost'=>'double',
    'total_qp'=>'integer',
    'active'=>'integer',
    'language'=>'string',
    'list_name'=>'string',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function eblast()
  {
    return $this->belongsTo('\App\Models\Eblast','eblast_id','id');
  }
}
