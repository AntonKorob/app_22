<?php
require '/app_2/confdb.php';

$id = $_GET['id'];
$sql = 'DELETE FROM `mydata` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /');