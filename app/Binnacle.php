<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binnacle extends Model
{
	protected $fillable = [
		'user_id',
		'activity'
	];

	public function user() {
        return $this->belongsTo(User::class);
    }
}
