<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
		protected $fillable = [
			'album',
			'artist',
			'tracks',
			'genre',
			'released',
			'cover',
			'created_at',
			'updated_at'
		];
}
