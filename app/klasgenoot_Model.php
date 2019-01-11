<?php 

namespace App; 

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Eloquent\SoftDeletes;

class klasgenoot_Model extends Model 
{ 
	use SoftDeletes;
	protected $table = 'classmates';
	protected $fillable = ['name', 'average','sex'];
	protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
}

