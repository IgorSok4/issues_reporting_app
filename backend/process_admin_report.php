<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $id_kategorii = $_POST['id_kategorii'];
    $opis = $_POST['opis'];
    $piorytet = $_POST['piorytet'];
    $imie_nazwisko = $_POST['imie_nazwisko'];
    $oddzial = $_POST['oddzial'];
    $zakonczone = isset($_POST['zakonczone']) ? 1 : 0;

    // aktualizacja zgloszenia w bazie danych
    $sql = "UPDATE zgloszenia SET tytul=?, id_kategorii=?, opis=?, piorytet=?, imie_nazwisko=?, oddzial=?, zakonczone=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssssi", $tytul, $id_kategorii, $opis, $piorytet, $imie_nazwisko, $oddzial, $zakonczone, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['update_status'] = "Zgłoszenie zostało zaktualizowane.";
    } else {
        $_SESSION['update_status'] = "Wystąpił błąd podczas aktualizowania zgłoszenia.";
    }
    $conn->close();

    header("Location: /issues_reporting_app/frontend/admin_page.php");
    exit;
}

?>
