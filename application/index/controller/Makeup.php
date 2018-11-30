<?php
namespace app\index\controller;
use think\Controller;
class Makeup extends Controller
{
	public function makeup()
	{
		return $this->fetch();
	}
}