<?php
if($_SESSION[temp]==""){    //判断$_SESSION[temp]==""的值是否为空，其中的temp为自定义的变量
    if(($fp=fopen("counter.txt","r"))==false){
        echo "打开文件失败！";
    }else{
        $counter=fgets($fp,1024);   //读取文件中的数据
        fclose($fp);    //关闭文本文件
        $counter++;     //计数器增加1
        $fp=fopen("counter.txt","w");   //以写的方式打开文本文件
        fputs($fp,$counter);    //将新的统计数据增加1
       
        fclose($fp);
    }
    $_SESSION[temp]=1;  //登录以后，$_SESSION[temp]的值不为空，给$_SESSION[temp]赋值1
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>通过文本文件统计页面访问量</title>
</head>
<body>
    <img src="dg1.php">
</body>
</html>
