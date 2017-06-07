<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
//实例：九九乘法表
/*
	(1)一行一列的表格
	(2)九行一列的表格
	(3)九行九列的表格
	(4)梯形表格
	(5)填入数据
*/

$str = "";
$str .= "<table width=800 border=1 align=center>";
$i = 1;//代表行数
while($i<=9)
{
	$str .= "<tr>";
	$j = 1;//代表列数
	while($j<=$i)
	{
		$str .= "<td>{$j} &times {$i}=".$j*$i."</td>"; // &times  *
		$j++;//变量更新
	}
	$str .= "</tr>";
	++$i; // 变量更新
}
$str .= "</table>";
echo $str;

?>