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
$sql = "CREATE TABLE tb_affiche (
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(200) NOT NULL,
content TEXT,
createtime DATETIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table tb_affiche created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>