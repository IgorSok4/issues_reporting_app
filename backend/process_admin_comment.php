<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_zgloszenia = $_POST['id_zgloszenia'];
    $id_uzytkownika = $_POST['id_uzytkownika'];
    $tresc_komentarza = $_POST['opis'];

    $sql = "INSERT INTO komentarze (id_zgloszenia, id_uzytkownika, tresc_komentarza) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $id_zgloszenia, $id_uzytkownika, $tresc_komentarza);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['report_status'] = "Komentarz został zapisany.";
    } else {
        $_SESSION['report_status'] = "Wystąpił błąd podczas próby dodania komentarza.";
    }
    $stmt->close();
    $conn->close();

}

header("Location: /issues_reporting_app/frontend/admin_report_detail.php?id=" . $id_zgloszenia);
exit;
?>
