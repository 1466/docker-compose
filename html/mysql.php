<?php
$servername = "mysql";
$username = "root";
$password = "123456";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("Connected Error: " . $conn->connect_error);
} 
echo "Connected Success";
?>
