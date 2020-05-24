<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = [
		'title1_spanish',
		'title1_english',
		'content1_spanish',
		'content1_english',
		'title2_spanish',
		'title2_english',
		'content2_spanish',
		'content2_english',
		'title3_spanish',
		'title3_english',
		'content3_spanish',
		'content3_english',
		'picture1',
		'picture2',
		'picture3'
	];
}
