<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "<pre>";
}
//*******************************************************
//实例：使用数组保存个人信息
$arr = array("周更生","男",24,true,"大专","北京科技大学");
$str = "<h2>{$arr[0]}的基本信息如下</h2>";
$str .= "姓名：{$arr[0]}";
$str .= "<br>性别：$arr[1]";
$str .= "<br>年龄：$arr[2]";
$str .= "<br>婚否：".($arr[3] ? "已婚" : "未婚");
$str .= "<br>学历：$arr[4]";
$str .= "<br>毕业院校：".($arr[5] ? $arr[5] : "未填写");
echo $str;


?>
