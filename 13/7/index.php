<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>文件指针函数</title>
        <style type="text/css">
            <!--
            body,td,th{
                font-size:12px;
            }
            body{
                margin-left:10px;
                margin-top:10px;
                margin-right:10px;
                margin-bottom:10px;
            }
            -->
        </style>
    </head>
    <body>
        <?php
        $filename="07.txt";
        $total=filesize($filename);
        echo $total;
        if(is_file($filename)){
            echo "文件总字节数: ".$total."<br>";
            $fopen=fopen($filename,'rb');
            echo "初始指针位置是：".ftell($fopen)."<br>";
            fseek($fopen,33);
            echo "使用fseek()函数后指针的位置:".ftell($fopen)."<br>";
            $str=fgets($fopen);
            $str=iconv('gb2312','utf-8',$str);
            echo "输出当前指针后的内容:".$str."<br>";
            if(feof($fopen))
                echo "当前指针指向文件末尾:".ftell($fopen)."<br>";
            rewind($fopen);
            echo "使用rewind()函数后指针的位置：".ftell($fopen)."<br>";
            $text=fgets($fopen,33);
            $text=iconv('gb2312','utf-8',$text);
            echo "输出前33字节的内容:".$text;
            fclose($fopen);
        }else{
            echo "文件不存在";
        }
        ?>
    </body>
</html>