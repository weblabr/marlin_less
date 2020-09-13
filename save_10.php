<?php
session_start();
$simpleinput = $_POST['simpleinput'];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_less", "root", "root");

$sql = "SELECT * FROM text_table WHERE text_field=:simpleinput";
$statement = $pdo->prepare($sql);
$statement->execute(['simpleinput' => $simpleinput]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    $mess = "Введенная запись существует в таблице!";
    $_SESSION['error_message'] = $mess;

    header("Location: /task_10.php");
    exit;
}

$sql = "INSERT INTO text_table (text_field) VALUES (:simpleinput);";
$statement = $pdo->prepare($sql);
$statement->execute(['simpleinput' => $simpleinput]);
$mess = "Запись добавлена!";
$_SESSION['success'] = $mess;

header("Location: /task_10.php");

?>