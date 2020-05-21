<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $table = "objectives";

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
		'picture'
	];
}
