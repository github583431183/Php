<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
//实例：输出1-100之间的所有数
$i = 1; //条件初始化
while($i<=100) //条件判断
{
	echo $i." ";
	$i++; //条件更新，避免出现死循环
}

?>