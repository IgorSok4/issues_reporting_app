<?php include 'header.php';
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'invalidpassword') {
        echo '<p>Błędne hasło. Proszę spróbować ponownie.</p>';
    } elseif ($_GET['error'] == 'nouser') {
        echo '<p>Nie znaleziono użytkownika. Proszę spróbować ponownie.</p>';
    }
}
?>
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto" style="margin-bottom: 63px;">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">Logowanie</p>
                        <h2 class="fw-bold"><strong><span style="background-color: rgb(41, 41, 41);">Projekt PHP z MySQL</span></strong><br><strong><span style="background-color: rgb(41, 41, 41);">System zgłaszania błędów</span></strong></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center" style="background: #2d2c38;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(255,255,255);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-check-fill" style="border-color: rgb(255,255,255);color: #2d2c38;">
                                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg></div>
                            <form class="text-center" method="post" action="/issues_reporting_app/backend/authentication.php">
                                <div class="mb-3"><input class="form-control" type="text" name="login" placeholder="Login"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="haslo" placeholder="Hasło"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Zaloguj się</button></div>
                                <a class="text-muted" href="/issues_reporting_app/frontend/register.php">Utwórz nowe konto</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>