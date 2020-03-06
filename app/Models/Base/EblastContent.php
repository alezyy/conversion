<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class EblastContent extends Model
{
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
    'type_content_id'=>'integer',
    'filename_content'=>'string',
    'source_path'=>'string',
    'mime'=>'string',
    'link_content'=>'string',
    'text_content'=>'string',
    'style_block'=>'string',
    'short_link'=>'string',
    'original_name'=>'string',
    'clicks'=>'integer',
    'block'=>'string',
    'host_images'=>'integer',
    'parsed_href'=>'integer',
    'code'=>'string'
  ];
  public function eblast()
  {
    return $this->belongsTo('\App\Models\Eblast','eblast_id','id');
  }
  public function typeContent()
  {
    return $this->belongsTo('\App\Models\Type_content','type_content_id','id');
  }
}