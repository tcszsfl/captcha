<?php
namespace app\index\controller;

use think\Controller;
class Upload extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	
	public function index()
	{
		return $this->fetch();
	}
	public function checkcode()
	{
		 $code=input('yanzhengma');
		if(!captcha_check($code))
		{
		 echo "验证码错误！";
		} else {
		 echo "验证通过！";
		}
	}


	
}