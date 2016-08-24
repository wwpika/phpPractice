<?php
//以图形的形式输出数据库中的记录数
if(($fp=fopen("counter.txt","r"))==false){
    echo "打开文件失败！";
}else{
    $counter=fgets($fp,1024);
    fclose($fp);
    $im=imagecreate(240,24);
    $textcolor=imagecolorallocate($im,56,73,136);
    $gray=imagecolorallocate($im,255,255,255);
    $text=iconv("gb2312","utf-8","website:");
    $font="Fonts/FZHCJW.TTF";
    imagettftext($im,14,0,20,18,$gray,$font,$text);
    //imagestring($im,5,50,5,$text,$gray);
    imagestring($im,5,160,5,$counter,$gray);
    imagepng($im);
    imagedestroy($im);
  
}
?>