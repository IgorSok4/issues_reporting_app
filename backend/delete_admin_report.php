<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_zgloszenia = $_POST['id_zgloszenia'];
    echo($id_zgloszenia);

    $sql = "DELETE FROM zgloszenia WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_zgloszenia);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['report_status'] = "Zgłoszenie zostało usunięte.";
    } else {
        $_SESSION['report_status'] = "Wystąpił błąd podczas próby usunięcia zgłoszenia.";
    }


    $stmt->close();
    $conn->close();
}

header("Location: /issues_reporting_app/frontend/admin_page.php");
exit;
?>