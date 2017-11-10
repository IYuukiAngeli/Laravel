<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hei;
class Tool extends Model
{
    //
	protected $fillable = array('tool_code', 'tool_desc', 'tool_file', 'created_by', 'created_date', 'edited_by', 'edited_date');

	public function hei()
	{
	    return $this->hasMany('App\Hei');
	}

}
