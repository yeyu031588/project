<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';
	public function userProfile()
	{
		return $this->hasone('App\Models\UserProfile','userid');
	}

	public function addUser()
	{

	}

	public function getUser()
	{
		return User::find(1)->userProfile;
	}
}
