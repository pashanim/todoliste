<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "todolist";

$con = new mysqli($servername, $username, $password, $db);

$Ziel = $_POST["Ziel"];

$sql = "INSERT INTO todolist (text, erledigt)
VALUES ('$Ziel', '0')";

$con->query($sql);



$con->close();
header('Location: http://localhost:8080/addTask.php');
?>