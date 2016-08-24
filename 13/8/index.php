<!DOCTYPE>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>使用flock函数</title>
    </head>
    <body>
        <?php
        $filename='08.txt';     //声明要打开文件的名称
        $fd=fopen($filename,'w');       //以w形式打开文件
        flock($fd,LOCK_EX);     //锁定文件
        fwrite($fd,"hightman1");        //向文件中写入数据
        flock($fd,LOCK_UN);     //解除锁定
        fclose($fd);            //关闭文件指针
        readfile($filename);    //输出文件内容
        ?>
    </body>
</html>