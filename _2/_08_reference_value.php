<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：在函数中，给数组添加一个元素
$arr = array("周更生","男",24);
$school = "北京理工大学";
function addElement(&$arr2,$school2)// & 引用传值
{
	$arr2[] = $school2;
}

var_dump($arr);
echo "</br>";
//调用函数
addElement($arr,$school);
//输出结果
var_dump($arr);



?>