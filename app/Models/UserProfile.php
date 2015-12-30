<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
	protected $table = 'user_profile';
	protected $guarded = ['id'];
	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
