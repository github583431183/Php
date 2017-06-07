<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：输出1-100之间所有的偶数，用continue实现
for($i=1;$i<=100;$i++)
{
	//如果是奇数，则开始下次循环
	if($i%2!=0)
	{
		continue; //剩下的代码不再执行
	}
	echo "$i "; // 2 4 
}

?>