<?php
include 'db.php';

$id_zgloszenia = isset($_GET['id']) ? $_GET['id'] : 0;

$komentarze = [];
$sql = "SELECT k.*, u.login AS autor FROM komentarze k
        JOIN uzytkownicy u ON k.id_uzytkownika = u.ID
        WHERE k.id_zgloszenia = ?
        ORDER BY k.data_dodania DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_zgloszenia);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $komentarze[] = $row;
    }
}

$stmt->close();
$conn->close();
?>
