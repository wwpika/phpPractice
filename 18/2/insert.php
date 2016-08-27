<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "weiwei";

// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检查链接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


$sql="INSERT INTO tb_book_2(id,name,time,price,author,press)
VALUES ('4','沧海2','2016-03-09','38','小圆','天津出版社');".
"INSERT INTO tb_book_2(id,name,time,price,author,press)
VALUES ('5','沧海3','2016-03-09','38','小圆','天津出版社');";
//$sql=iconv('utf-8','gb2312',$sql);
/*
$str="('2','云海肴','2016-05-01','38','李飞','美术出版社');";
$str=iconv('utf-8','gb2312',$str);
$sql = "INSERT INTO tb_book_3 (id,name,time,price,author,press)
VALUES".$str;

$sql .="INSERT INTO tb_book_2 (id,name,time,price,author,press)
VALUES ('2','云海肴2','2016-03-01','38','李四','美术出版社');";
*/

if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>