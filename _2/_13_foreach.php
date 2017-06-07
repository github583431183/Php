<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "<pre>";
}
//*******************************************************

//实例：求数组中元素的和

$arr = array(
	10=>5,
	14=>6,
	8=>10
);

$sum = 0;
foreach($arr as $value)
{
	$sum += $value;
}
echo "和为$sum";





?>
