<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $haslo = mysqli_real_escape_string($conn, $_POST['haslo']);

    $hasloHashed = password_hash($haslo, PASSWORD_DEFAULT);

    $sql = "SELECT ID FROM uzytkownicy WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Nazwa użytkownika jest już zajęta.";
    } else {
        $sql = "INSERT INTO uzytkownicy (login, haslo) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $login, $hasloHashed);
        $stmt->execute();
        echo "Rejestracja zakończona sukcesem!";
    }
    $conn->close();
}
?>
