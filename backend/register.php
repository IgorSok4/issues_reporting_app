<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $haslo = mysqli_real_escape_string($conn, $_POST['haslo']);
    $rola = 0;

    $hasloHashed = password_hash($haslo, PASSWORD_DEFAULT);

    $sql = "SELECT ID FROM uzytkownicy WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['register_status'] = "Nazwa użytkownika jest już zajęta.";
    } else {
        $sql = "INSERT INTO uzytkownicy (login, email, haslo, rola) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $login, $email, $hasloHashed, $rola);
        $stmt->execute();
        $_SESSION['register_status'] = "Rejestracja zakończona sukcesem!";
    }
    $conn->close();
    header("Location: /issues_reporting_app/frontend/signup.php");
    exit;
}
if (isset($_SESSION['register_status'])): ?>
    <script>
        alert('<?php echo $_SESSION['register_status']; ?>');
    </script>
    <?php
        unset($_SESSION['register_status']);
    endif;
?>
