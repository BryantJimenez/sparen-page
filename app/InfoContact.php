<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoContact extends Model
{
    protected $table = "info_contacts";

	protected $fillable = [
		'address',
		'phone',
		'email',
		'facebook',
		'twitter'
	];
}
