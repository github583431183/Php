<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

/*

echo和print都可以做输出，不同的是，
echo不是函数，没有返回值，
而print是一个函数有返回值，所以相对而言如果只是输出 echo 会更快，
而print_r通常用于打印变量的相关信息，通常在调试中使用。

print   是打印字符串
print_r 则是打印复合类型  如数组 对象

*/
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "<pre>";
}
//*******************************************************
//（2）使用[]，来创建多维数组
$arr["name"] = "周更生";
$arr["sex"]  = "男";
$arr["contact"]["tel"] = "010-12345678";
$arr["contact"]["mobile"] = "130110120119";
$arr["contact"]["qq"] = "88888888";
echo "座机号：".$arr['contact']['tel'];
dump($arr);



?>
