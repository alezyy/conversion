<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class TypeContent extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=['is_active'=>0];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'name'=>'string',
    'is_active'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function eblastContents()
  {
    return $this->hasMany('\App\Models\Eblast_content','type_content_id','id');
  }
}
