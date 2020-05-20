<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	protected $table = "reports";

	protected $fillable = [
		'title_spanish',
		'title_english',
		'slug',
		'pdf_spanish',
		'pdf_english',
		'description_spanish',
		'description_english',
		'user_id'
	];
}
