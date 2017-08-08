<?php
/*
    1.变量的应用
    2.系统环境变量信息
    3.可变变量
*/

//1.变量的应用
$str = 'hello world';
echo $str;
echo '<hr>'; 

//2.系统环境变量信息
echo "<pre>";
print_r($_ENV);
echo '<hr>';

//3.可变变量
$str_name = 'str_name_1';
$str_name_1 = 'php';
echo $$str_name; 