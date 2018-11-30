<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
	public function login()
	{
		return $this->fetch();
	}
	public function loginOut()
	{
		return $this->success('已退出','index/index');
	}
}