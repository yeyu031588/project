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
	*添加用户
	*$param $dataArr 添加的数据
	*
	*/
	public function addUser($dataArr)
	{
		$reArr = array('status'=>0,'message'=>'系统出错');
		$dataArr = is_array($dataArr)?$dataArr:array();
		if(empty($dataArr['user']['username'])){
			$reArr['message'] = '姓名不能为空';
			return $reArr;
		}
		$user = User::create($dataArr['user'])->userProfile()->create($dataArr['profile']);
		if($user){
			$reArr['status'] = 1;
		}
		return $reArr;
	}

	public function getUser()
	{
		return User::find(1)->userProfile;
	}
}
