<!DOCTYPE>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
            <title>使用fwrite和file_put_contents函数写入数据</title>
            <style type="text/css">
                <!--
                body,th,th{
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
            $filepath="05.txt";
            $str="此情可待成追忆 只是当时已惘然<br>";
            echo "用fwrite函数写入文件:";
            $fopen=fopen($filepath,'wb') or die('文件不存在');
            fwrite($fopen,$str);
            fclose($fopen);
            readfile($filepath);
            echo "<p>用file_put_contents函数写入文件:";
            file_put_contents('051.txt',$str);
            readfile($filepath);
            ?>
        </body>
    </html>