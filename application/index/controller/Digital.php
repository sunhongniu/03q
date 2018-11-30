<?php
namespace app\index\controller;
use think\Controller;
class Digital extends Controller
{
	public function digital()
	{
		return $this->fetch();
	}
}