<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function posts()
	{
		return $this->belongsToMany('App\Model\User\Posting','kategori_posts')->orderBy('created_at', 'desc')->paginate(2);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
