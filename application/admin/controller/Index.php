<?php
namespace app\admin\Controller;
use think\Controller;
class Index extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	
	public function head()
	{
		return $this->fetch();
	}
	
	public function left()
	{
		return $this->fetch();
	}
	
	public function main()
	{
		return $this->fetch();
	}
	
	public function foot()
	{
		return $this->fetch();
	}
}