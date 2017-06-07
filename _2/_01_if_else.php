<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：根据用户输入的分数，给其下不同的评语
//（1）获取地址栏中，用户输入的分数
$score = (int)$_GET["score"];
//（2）多条件判断
if($score>=90)
{
	$str = "优秀";
}else if($score>=80)
{
	$str = "良好";
}else if($score>=70)
{
	$str = "中等";
}else if($score>=60)
{
	$str = "及格";
}else
{
	$str = "不及格";
}
echo $str;


?>