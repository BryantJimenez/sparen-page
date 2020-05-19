<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binnacle extends Model
{
	protected $table = "binnacles";

	protected $fillable = [
		'user_id',
		'activity'
	];

	public function user() {
        return $this->belongsTo(User::class);
    }
}
