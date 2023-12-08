<?php
session_start();

$current_page = basename($_SERVER['PHP_SELF']);
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    if ($current_page != 'signup.php' &&
        $current_page != 'register.php' &&
        $current_page != 'index.php' &&
        $current_page != 'authors.php') {
        header('Location: signup.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://   cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens---Create-Edit-Form.css">
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span><img src="assets/img/brands/error-icon-25260.png" width="65" height="65"></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><strong>Strona główna</strong></a></li>
                    <li class="nav-item"><a class="nav-link active" href="report.php"><strong>Dodaj zgłoszenie</strong></a></li>
                    <li class="nav-item"><a class="nav-link active" href="authors.php"><strong>Autorzy</strong></a></li>

                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['admin'] == true): ?>
                    <li class="nav-item"><a class="nav-link active" href="admin_page.php"><strong>Panel Admina</strong></a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                    <li class="nav-item"><a class="nav-link active"><strong>Hello <?php echo htmlspecialchars($_SESSION['username']); ?></strong></a></li>
                    <a class="btn btn-primary shadow m-lg-2" role="button" href="../backend/logout.php">Wyloguj się</a>
                <?php else: ?>
                    <a class="btn btn-primary shadow" role="button" href="signup.php">Logowanie</a>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>