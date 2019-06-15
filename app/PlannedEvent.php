<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlannedEvent extends Model
{
	protected $table = 'PlannedEvents';
    protected $fillable = ['Name', 'HostName', 'Date', 'Time'];

    public function url(){
		return $this->id ? 'plannedevents.update' : 'plannedevents.store';
	}

	public function method(){
		return $this->id ? 'PUT' : 'POST';
	}
}
