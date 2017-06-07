<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//（2）函数引用传地址：在函数中添加一个数组元素
//定义函数
function addElement(&$arr2,$school2)
{
	$arr2[] = $school2;
}
//调用函数
$arr = array("周更生","男",24);
$school = "北京理工大学";
addElement($arr,$school);
//打印函数外数组内容
print_r($arr);

?>
