<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//假设某人有100,000现金。每经过一次路口需要进行一次交费。交费规则为当他现金大于50,000时每次需要交5%如果现金小于等于50,000时每次交5,000。请写一程序计算此人可以经过多少次这个路口。 
/*
	(1)你有多少钱：$money=100000
	(2)你最少有多少钱，能让你过路口。5000元。
	(3)第一种条件：当$money>50000时，每次还剩多少？ $money*0.95
	(4)第二种条件：当$money<=50000时，每次还剩多少？$money-5000
*/
$money = 100000;
$n = 0; //次数
while($money>=5000)
{
	if($money>50000)
	{
		$money *= 0.95;
	}else if($money<=50000)
	{
		$money -= 5000;
	}
	$n++;
}
echo "共可以经过路口{$n}次";




?>