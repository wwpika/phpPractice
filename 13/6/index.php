<!DOCTYPE>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>浏览目录</title>
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
        $path='E:\AppServ\www\mysite\13\5';
        if(is_dir($path)){
            $dir=scandir($path);
            foreach($dir as $value){
                echo $value."<br>";
            }
        }else{
            echo "目录路径错误";
        }
        ?>
    </body>
</html>