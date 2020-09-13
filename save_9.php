<?php
$simpleinput = $_POST['simpleinput'];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_less", "root", "root");
$sql = "INSERT INTO text_table (text_field) VALUES (:simpleinput);";
$statement = $pdo->prepare($sql);
$statement->execute(['simpleinput' => $simpleinput]);

header("Location: /task_9.php");

?>