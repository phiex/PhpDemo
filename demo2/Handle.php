<?php
//PHP实现文件上传功能实例代码
header('content-type:text/html;charset=UTF-8');
//取文件信息
$arr = $_FILES['file'];
/*
    加限制条件
    1.文件类型
    2.文件大小
    3.保存的文件名不能重复
*/
//判断上传的文件是否是jpeg和png,文件大小是否超过1m
if(($arr['type']=="image/jpeg" || $arr['type'] == "image/png")&& $arr["size"]<10241000 )
{
    //临时文件的路径,上传文件存放的路径
    $arr['tmp_name'];
    /*
        避免文件重复
        1.加时间戳,time()加用户名 . date('YmdHis')
        2.类似网盘,使用文件夹来防止重复
    */
    $filename = "./images/" . date("YmdHis") . $arr['name'];
    //保存之前判断文件是否存在
    if(file_exists($filename))
    {
        echo '文件已存在';
    }else
    {
        //文件中文名会有问题,所有需要转码
        $filename = iconv("UTF-8","gb2312",$filename);
        /*
            移动临时文件到上传的文件存放的地址
            括号里:1.临时文件的路径,2.存放的路径
        */
        move_uploaded_file($arr['tmp_name'],$filename);
    }
}else
{
    echo "上传的大小或类型不符合";
}