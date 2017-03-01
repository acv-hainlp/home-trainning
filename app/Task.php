<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) // = static function incomplete
    {
    	return $query->where('completed', 0);
    }

    public static function showtask()
    {
    	// return static::where('completed',0)->get();
    	return static::all();
    }
}
