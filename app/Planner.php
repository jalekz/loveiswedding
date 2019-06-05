<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
	protected $fillable = ['Name', 'LastName', 'Email', 'PhoneNumber'];

	public function url(){
		return $this->id ? 'planners.update' : 'planners.store';
	}

	public function method(){
		return $this->id ? 'PUT' : 'POST';
	}
}
