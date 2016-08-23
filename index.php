<!DOCTYPE>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>使用fread函数读取文件</title>
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
    </style></head>
    <body>
        <?php
        $filename="04.txt";
        $fp=fopen($filename,"rb");
        echo fread($fp,32);
        echo "<p>";
        echo fread($fp,filesize($filename));
        ?>
    </body>
</html>










