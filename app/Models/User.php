<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';
	protected $guarded = ['id'];

	public function userProfile()
	{
		return $this->hasone('App\Models\UserProfile','userid');
	}


}
