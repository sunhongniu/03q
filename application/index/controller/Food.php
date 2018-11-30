<?php
namespace app\index\controller;
use think\Controller;

class Food extends Controller
{
	public function food()
	{
		return $this->fetch();
	}
}