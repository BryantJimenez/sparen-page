<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $table = "banners";

	protected $fillable = [
		'banner1_spanish',
		'banner1_english',
		'banner2_spanish',
		'banner2_english',
		'banner3_spanish',
		'banner3_english',
		'picture1',
		'picture2',
		'picture3'
	];
}
