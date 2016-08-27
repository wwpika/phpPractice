<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>创建与MySql服务器的连接</title>
    </head>
    <body>
        <?php
        $link=mysql_connect("localhost","root","password") or die("不能连接到数据库服务器！".mysql_error());
        if($link){
            echo "数据源连接成功!";
        }
        ?>
    </body>
</html>