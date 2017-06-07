<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

$i = 0;
while(++$i)
{
	switch($i)
	{
		case 5:
			echo "第{$i}次循环<br>";
			break 1;
		case 10:
			echo "第{$i}次循环<br>";
			break 2;
	}
}
echo $i;


?>