<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract{
    //
    use Authenticatable;

    protected $table = 'users';

	protected $fillable = array('username', 'fullname', 'password', 'retries', 'usertype', 'created_by', 'created_date', 'edited_by', 'edited_date','remember_token');

    protected $hidden =['password','remember_token'];

	public function tbl_usertypes(){
		return $this->hasMany('Usertypes');
	}
}
