<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'read'=>0,
    'modify'=>0,
    'add'=>0,
    'delete'=>0,
    'is_active'=>1
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'metatable_id'=>'integer',
    'read'=>'integer',
    'modify'=>'integer',
    'add'=>'integer',
    'delete'=>'integer',
    'is_active'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function metatable()
  {
    return $this->belongsTo('\App\Models\Metatable','metatable_id','id');
  }
  public function users()
  {
    return $this->belongsToMany('\App\Models\User','user_has_permissions','permission_id','user_id');
  }
}
