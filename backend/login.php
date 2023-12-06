<?php
include 'db.php';

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "SELECT * FROM uzytkownicy WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();



?>