<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7
 * Time: 15:14
 * demo:获取当前主机、域名、网址、路径、端口等参数
 */
header('content-type:text/html;charset=UTF-8');
//返回自身路径，没有文件自身的名字
$filenamefirst = getcwd();
//返回自身路径，有文件自身的名字
$filenamesec = __FILE__;
//dirname:返回路径中的目录部分
$filenamethree = dirname(__FILE__);

echo $filenamefirst,'<br>';
echo $filenamesec.'<br>';
echo $filenamethree;

echo '<hr>';

//获取域名或主机地址
$Server = $_SERVER['HTTP_HOST'];
echo $Server.'<hr>';

//获取网页地址
$page = $_SERVER['PHP_SELF'];
echo $page.'<hr>';

//包含端口号的完整URL
$url = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
echo $url;