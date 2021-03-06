<?php
/* Model object generated by: Skipper (http://www.skipper18.com) */
/* Do not modify this file manually.*/

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserHasBranchRole extends Pivot
{
  /**  
  * Primary key name.
  * 
  * @var string
  */
  public $primaryKey='user_id';
  
  /**  
  * Primary key is non-autoincrementing.
  * 
  * @var bool
  */
  public $incrementing=false;
  
  /**  
  * Do not automatically manage timestamps by Eloquent
  * 
  * @var bool
  */
  protected $timestamps=false;
  
  /**  
  * The attributes that should be cast to native types.
  * 
  * @var array
  */
  protected $casts=[
    'user_id'=>'integer',
    'branch_role_id'=>'integer'
  ];
}
