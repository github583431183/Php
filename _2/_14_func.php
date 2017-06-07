<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：求5和8的最大值，求10和20的最大值，求12和25最大值，……

$a = 5;
$b = 8;
if($a>$b)
{
	$max = $a;
}else
{
	$max = $b;
}
echo "$a 和 $b 的最大值是：$max <hr>";
//********************************************
$a = 10;
$b = 20;
if($a>$b)
{
	$max = $a;
}else
{
	$max = $b;
}
echo "$a 和 $b 的最大值是：$max <hr>";
//*******************************************
$a = 12;
$b = 25;
if($a>$b)
{
	$max = $a;
}else
{
	$max = $b;
}
echo "$a 和 $b 的最大值是：$max <hr>";


//用函数来实现
function getMax($a,$b)
{
	if($a>$b)
	{
		$max = $b;
	}else
	{
		$max = $a;
	}
	echo "<font color=red>$a 和 $b 的最小值是：$max </font><hr>";
}
getMax(5,8);
getMax(10,20);
getMax(12,25);

?>
