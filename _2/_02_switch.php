<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php


//实例：根据用户状态值，输出用户当前的信息
/*
	0，登录失败
	1，登录成功
	2，VIP用户
	3，VIP缴费到期
*/
$status = 2;
switch($status)
{
	case 1:
		$str = "登录成功！";
		break;
	case 2:
		$str = "VIP用户！";
		break;
	case 3:
		$str = "VIP缴费到期";
		break;
	default:
		$str = "登录失败！";
}
echo $str;



?>