<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "todolist";

$con = new mysqli($servername, $username, $password, $db);

$id = $_GET["id"];

$sql = "
UPDATE todolist
SET erledigt = '1'
WHERE id = $id;
";

$con->query($sql);



$con->close();
header('Location: http://localhost:8080/index.php');
?>