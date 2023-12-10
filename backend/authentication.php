<?php
session_start();

include 'db.php';

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$login = mysqli_real_escape_string($conn, $login);
$haslo = mysqli_real_escape_string($conn, $haslo);

$sql = "SELECT * FROM uzytkownicy WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $uzytkownik = $result->fetch_assoc();
    if (password_verify($haslo, $uzytkownik['haslo'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uzytkownik['login'];
        $_SESSION['admin'] = $uzytkownik['rola'];
        $_SESSION['user_id'] = $uzytkownik['ID'];

        $_SESSION['login_status'] = "Pomyślna autoryzacja użytkownika.";
        header("Location: /issues_reporting_app/frontend/index.php");
        exit;
    } else {
        $_SESSION['login_status'] = "Wystąpił błąd podczas autoryzacji użytkownika.\nBłędne dane.";
        header("Location: /issues_reporting_app/frontend/signup.php");
        exit;
    }
} else {
    $_SESSION['login_status'] = "Wystąpił błąd podczas autoryzacji użytkownika.\nUżytkownik nie istnieje.";
    header("Location: /issues_reporting_app/frontend/signup.php");
    exit;
}

if (isset($_SESSION['login_status'])): ?>
<script>
    alert('<?php echo $_SESSION['login_status']; ?>');
</script>
<?php
    unset($_SESSION['login_status']);
endif;
?>
