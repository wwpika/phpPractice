<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>选择MySql数据库</title>
    </head>
    <body>
        <?php
        $link=mysql_connect("localhost","root","password") or die("不能连接到数据库服务器!".mysql_error());
        $db_selected=mysql_select_db("weiwei",$link);
        if($db_selected){
            echo "数据库选择成功";
            echo $db_selected;
        }
        ?>
    </body>
</html>