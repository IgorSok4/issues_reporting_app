<?php
include 'db.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;
$userId = $_SESSION['user_id'];

$sql = "SELECT zg.id, zg.tytul, zg.opis, zg.piorytet, zg.imie_nazwisko, zg.oddzial, zg.id_uzytkownika, zg.zakonczone, kz.nazwa AS kategoria
        FROM zgloszenia zg
        LEFT JOIN kategoria_zgloszenia kz ON zg.id_kategorii = kz.ID
        WHERE zg.id_uzytkownika = ?
        ORDER BY zg.zakonczone ASC, zg.id DESC
        LIMIT $limit OFFSET $offset";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId,);
$stmt->execute();
$result = $stmt->get_result();
$reports = [];

while ($row = $result->fetch_assoc()) {
    $reports[] = $row;
}

// Pobieranie całkowitej liczby zgłoszeń użytkownika dla paginacji
$sql = "SELECT COUNT(*) AS total FROM zgloszenia WHERE id_uzytkownika = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$totalRows = $result->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $limit);

$stmt->close();
$conn->close();
?>
