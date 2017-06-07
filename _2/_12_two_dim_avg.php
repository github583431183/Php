<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "<pre>";
}
//*******************************************************

//实例：计算数组中元素的平均值
/*
	(1)和是多少？
	(2)个数是多少？
	(3)平均值 = 和 / 个数
*/
$arr = array(
	array(10,11,12,13,14),
	array(20,21,22,23),
	array(30,31,32),
	array(40,41),
	array(50)
);
$sum = 0;
$len = 0;
for($i=0;$i<count($arr);$i++)// count:计算数组中的单元数目或对象中的属性个数
{
	for($j=0;$j<count($arr[$i]);$j++)//第i个数组中的个数
	{
		$sum += $arr[$i][$j];
		/*
			第1次循环 $sum += $arr[$i][$j] ＝〉  $sum = $sum + $arr[$i][$j]
			                                     $sum = 0 + $arr[0][0]
												 $sum = 0 + 10
												 $sum = 10	
			第2次循环 $sum += $arr[$i][$j] ＝〉  $sum = $sum + $arr[$i][$j]
			                                     $sum = 10 + $arr[0][1]
												 $sum = 10 + 11
												 $sum = 21	
		*/
		$len++;
	}
}
echo "平均值：".round($sum/$len,2);//四舍五入 保留2位小数

?>
