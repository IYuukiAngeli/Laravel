<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //
	protected $fillable = array('tool_code', 'tool_desc', 'tool_file', 'created_by', 'created_date', 'edited_by', 'edited_date');

}
