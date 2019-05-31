<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
	protected $fillable = ['Name', 'LasName', 'Email', 'PhoneNumber'];
}
