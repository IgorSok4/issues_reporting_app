<?php
session_start(); // Upewnij się, że rozpoczynasz sesję na początku skryptu

include 'db.php';

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$login = mysqli_real_escape_string($conn, $login);
$haslo = mysqli_real_escape_string($conn, $haslo);

$sql = "SELECT * FROM uzytkownicy WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $uzytkownik = $result->fetch_assoc();
    if (password_verify($haslo, $uzytkownik['haslo'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uzytkownik['login'];

        header("Location: /issues_reporting_app/frontend/index.php");
        exit;
    } else {
        header("Location: signup.php?error=invalidpassword");
        exit;
    }
} else {
    header("Location: signup.php?error=nouser");
    exit;
}

?>
