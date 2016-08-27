<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>伪变量$this</title>
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
        class example{
            function exam(){
                if(isset($this)){
                    echo '$this的值为: '.get_class($this);
                }else{
                    echo '$this未定义';
                }
            }
        }
        $class_name=new example();
        $class_name->exam();
        ?>
    </body>
</html>