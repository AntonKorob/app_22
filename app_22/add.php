<?php
$data = $_POST['data']; // Получаем данные за POST запроса
if ($data == '') {
    header('Location: /'); // Перенаправляем на главную страницу
}

require '/app_22/confdb.php' // Подключаем файл базы данных

$sql = "INSERT INTO mydata (data)
VALUES ('')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
