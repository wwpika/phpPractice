<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用fgetc函数读取字符</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<pre>
<?php

    $fp=fopen('03.txt','rb');
    while(!(feof($fp))){
        $str=fgets($fp);
        $str=iconv('gb2312','utf-8',$str);
        echo $str;        
    }
    
    $f_contents=file_get_contents('03.txt');
    //$f_contents=mb_convert_encoding($f_contents,'gb2312','utf-8');
    $f_contents=iconv('gb2312','utf-8',$f_contents);
    echo $f_contents;
    echo 'file_get_contents()';
    echo '<br>';
    
    $f_arr=file('03.txt');
    foreach($f_arr as $cont){
        $cont=iconv('gb2312','utf-8',$cont);
        echo $cont;
    }
    echo 'file()';
    
    
   
    $fopen = fopen('03.txt','rb');
	while(false !== ($chr = fgetc($fopen))){
        //$encoding=mb_detect_encoding($chr,array('GB2312','GBK','UTF-16','UCS-2','UTF-8','BIG5','ASCII'));
        //echo $encoding;
        $chr=iconv('gb2312','utf-8',$chr);
     
		echo $chr;
	}
    echo 'fgetc';
	
?>
</pre>
</body>
</html>
