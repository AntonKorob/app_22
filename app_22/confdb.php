<?php
$servername = "localhost";
$username = "root";
$password = "";

// Создаем соединение
$conn = mysqli_connect($servername, $username, $password);

// Проверяем соединение
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>