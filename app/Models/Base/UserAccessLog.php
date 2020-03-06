<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class UserAccessLog extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=['ip_address'=>' '];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'user_id'=>'integer',
    'ip_address'=>'string',
    'note'=>'string',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function user()
  {
    return $this->belongsTo('\App\Models\User','user_id','id');
  }
}
