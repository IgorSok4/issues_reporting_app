<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_komentarza = $_POST['id_komentarza'];
    $id_zgloszenia = $_POST['id_zgloszenia'];

    $sql = "DELETE FROM komentarze WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_komentarza);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['report_status'] = "Komentarz został usunięty.";
    } else {
        $_SESSION['report_status'] = "Wystąpił błąd podczas próby usunięcia komentarza.";
    }

    $stmt->close();
    $conn->close();
}

header("Location: /issues_reporting_app/frontend/admin_report_detail.php?id=" . $id_zgloszenia);
exit;
?>