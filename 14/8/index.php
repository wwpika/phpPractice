<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>"::"操作符</title>
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
        class Book{
            const NAME="computer";
            function __construct(){
                echo '本月图书类冠军为: '.Book::NAME.' ';
            }
        }
        class l_book extends Book{
            const NAME='foreign language';
            function __construct(){
                parent::__construct();
                echo '本月图书类冠军为: '.self::NAME.' '; 
            }
        }
        $obj=new l_book();
        ?>
    </body>
</html>