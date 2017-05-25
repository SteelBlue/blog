<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	/**
	 *	Query Scope for incompleted tasks.
	 */
    public function scopeIncomplete($query)
    {
    	return $query->where('completed', 0);
    }
}
