<?php include 'header.php'; ?>
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto" style="margin-bottom: 63px;">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">Rejestracja</p>
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
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(255,255,255);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill-add" style="border-color: rgb(255,255,255);color: #2d2c38;">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"></path>
                                </svg></div>
                            <form class="text-center" method="post" action="/reporting_system/backend/register.php">
                                <div class="mb-3"><input class="form-control" type="text" name="login" placeholder="Login" required></div>
                                <div class="mb-3"><input class="form-control" type="password" name="haslo" placeholder="Hasło" required></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Zarejestruj się</button></div>
                                <p class="text-muted"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>