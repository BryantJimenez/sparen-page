<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = "abouts";

	protected $fillable = [
		'paragraph1_spanish',
		'paragraph1_english',
		'paragraph2_spanish',
		'paragraph2_english',
		'list1_spanish',
		'list1_english',
		'list2_spanish',
		'list2_english',
		'list3_spanish',
		'list3_english'
	];
}
