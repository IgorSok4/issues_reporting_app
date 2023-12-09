<?php
include 'db.php';

$id_zgloszenia = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT zg.*, kz.nazwa AS nazwa_kategorii, u.login AS login_uzytkownika
        FROM zgloszenia zg
        LEFT JOIN kategoria_zgloszenia kz ON zg.id_kategorii = kz.ID
        LEFT JOIN uzytkownicy u ON zg.id_uzytkownika = u.ID
        WHERE zg.id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_zgloszenia);
$stmt->execute();
$result = $stmt->get_result();
$zgloszenie = $result->fetch_assoc();


$kategorie = [];
$sql = "SELECT ID, nazwa FROM kategoria_zgloszenia";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kategorie[] = $row;
    }
}


$conn->close();
?>
