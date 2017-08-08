<?php
header('content-type:text/html;charset=UTF-8');
//自动转换
$a = 10;                  //整数类型
$b = "我是字符串型数据";    //字符串类型数据
$e = $a + $b;
$f = $b + $a;
echo '自动类型转换:'.'<br>';
echo  '10+我是字符串型数据='.$e."<hr>";
echo '强制类型转换：'.'<br>';
echo '10+我是字符串类型数据='.(string)$e."<br>";