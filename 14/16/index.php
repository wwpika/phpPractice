<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>__clone()方法</title>
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
        class SportObject{
            private $object_type='book';
            public function setType($type){
                $this->object_type=$type;
            }
            public function getType(){
                return $this->object_type;
            }
            public function __clone(){
                $this->object_type='computer';
            }
        }
        $book1=new SportObject();
        $book2=clone $book1;
        echo '对象$book1的变量值为: '.$book1->getType();
        echo '<br>';
        echo '对象$book2的变量值为: '.$book2->getType();
        ?>
    </body>
</html>