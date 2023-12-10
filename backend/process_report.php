<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tytul = mysqli_real_escape_string($conn, $_POST['tytul']);
    $opis = mysqli_real_escape_string($conn, $_POST['opis']);
    $piorytet = isset($_POST['piorytet']) ? (int)$_POST['piorytet'] : 0;
    $imieNazwisko = mysqli_real_escape_string($conn, $_POST['imie_nazwisko']);
    $oddzial = mysqli_real_escape_string($conn, $_POST['oddzial']);
    $idKategorii = isset($_POST['id_kategorii']) ? (int)$_POST['id_kategorii'] : null;
    $idUzytkownika = $_SESSION['user_id'];
    $zakonczone = 0;

    $sql = "INSERT INTO zgloszenia (tytul, opis, piorytet, imie_nazwisko, oddzial, id_kategorii, id_uzytkownika, zakonczone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissiii", $tytul, $opis, $piorytet, $imieNazwisko, $oddzial, $idKategorii, $idUzytkownika, $zakonczone);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['report_status'] = "Zgłoszenie zostało zapisane.";
    } else {
        $_SESSION['report_status'] = "Wystąpił błąd podczas zapisywania zgłoszenia.";
    }
    $stmt->close();
    $conn->close();

    header("Location: /issues_reporting_app/frontend/report.php");
    exit;
}
?>