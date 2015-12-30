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

	/*
	*更改用户信息
	*$param $data 保存数据
	*$parame $userid 用户id
	*/
	public function updateUser($id,$data)
	{

	} 

	/*
	*检验登录用户密码
	*$param $username 用户名
	*$password 用户密码
	*/
	public function checkUserExist($username,$password)
	{

	}

}
