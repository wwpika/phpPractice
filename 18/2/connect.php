<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 使用 sql 创建数据表
$sql = "CREATE TABLE tb_book_3 (
id INT(6) UNSIGNED PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
time DATE,
price int(6),
author VARCHAR(30),
press VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>