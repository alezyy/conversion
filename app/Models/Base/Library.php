<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
  /**  
  * The model's default values for attributes.
  * 
  * @var array
  */
  protected $attributes=[
    'published'=>0,
    'filename'=>'NULL'
  ];
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'id'=>'integer',
    'branch_id'=>'integer',
    'title'=>'string',
    'source'=>'string',
    'size'=>'integer',
    'mime'=>'string',
    'public_key'=>'string',
    'published'=>'integer',
    'filename'=>'string',
    'original_name'=>'string',
    'height'=>'integer',
    'width'=>'integer',
    'created_at'=>'datetime',
    'updated_at'=>'datetime'
  ];
  public function branch()
  {
    return $this->belongsTo('\App\Models\Branch','branch_id','id');
  }
}
