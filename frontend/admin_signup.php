<?php include 'header.php'; ?>
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto" style="margin-bottom: 63px;">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">PANEL ADMINA - LOGOWANIE</p>
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
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(255,255,255);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-vcard-fill" style="border-color: rgb(255,255,255);color: #2d2c38;">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Hasło"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Zaloguj się</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>