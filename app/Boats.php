<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use DB;

class Boats extends Model
{


    protected $table = 'boats';

  public function get_full_cat_data()
{
	 return $this->hasOne('App\Boats_cat','id','Boatscat');
}




	}
