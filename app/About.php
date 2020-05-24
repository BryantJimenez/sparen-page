<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $fillable = [
		'paragraph_spanish',
		'paragraph_english',
		'list1_spanish',
		'list1_english',
		'list2_spanish',
		'list2_english',
		'list3_spanish',
		'list3_english',
		'list4_spanish',
		'list4_english',
		'picture'
	];
}
