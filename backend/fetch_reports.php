<?php
include 'db.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

$sql = "SELECT zg.id, zg.tytul, zg.opis, zg.piorytet, zg.imie_nazwisko, zg.oddzial, zg.zakonczone, kz.nazwa AS kategoria
        FROM zgloszenia zg
        LEFT JOIN kategoria_zgloszenia kz ON zg.id_kategorii = kz.ID
        ORDER BY zg.zakonczone ASC, zg.id DESC
        LIMIT $limit OFFSET $offset";

$result = $conn->query($sql);
$reports = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reports[] = $row;
    }
}

// Pobieranie całkowitej liczby zgłoszeń dla paginacji
$sql = "SELECT COUNT(*) AS total FROM zgloszenia";
$result = $conn->query($sql);
$totalRows = $result->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $limit);

$conn->close();

?>
