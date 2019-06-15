<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
	protected $table = 'userroles';
    protected $fillable = ['id', 'Role'];


	public function User()
	{
		return $this->belongsTo('App\User', 'RoleID');
	}

	public function url(){
		return $this->id ? 'userroles.update' : 'userroles.store';
	}

	public function method(){
		return $this->id ? 'PUT' : 'POST';
	}
}
