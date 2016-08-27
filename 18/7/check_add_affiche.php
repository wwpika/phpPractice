<?php
$conn=mysql_connect("localhost","root","password") or die("数据库服务器连接错误".mysql_error());
mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
$title=$_POST[txt_title];
$content=$_POST[txt_content];
$createtime=date("Y-m-d H:i:s");
$str="insert into tb_affiche(title,content,createtime) values('$title','$content','$createtime')";
$str=iconv("utf-8","gb2312",$str);
$sql=mysql_query($str);
echo "<script>alert('公告信息添加成功!');window.location.href='add_affiche.php';</script>";
mysql_free_result($sql);
mysql_close($conn);
?>