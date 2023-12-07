<?php include 'header.php'; ?>
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto" style="margin-bottom: 63px;">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">Logowanie</p>
                        <h2 class="fw-bold"><span style="background-color: rgba(0, 0, 0, 0.125);">Projekt PHP z MySQL</span><br><span style="background-color: rgba(0, 0, 0, 0.125);">System zgłaszania błędów</span></h2>
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
    <div class="row justify-content-center">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow" style="background: rgba(0,0,0,0.125);">
                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3" style="background: #27262e;">
                    <h1 class="display-6 text-nowrap text-capitalize mb-0" style="font-family: Inter, sans-serif;font-size: 32px;"><strong><span style="background-color: rgba(0, 0, 0, 0.125);">Zgłoszenia</span></strong></h1>
                    <div class="input-group input-group-sm w-auto"></div>
                </div>
                <div class="card-body" style="background: #ffffff;">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="background: rgb(255,255,255);border-width: 1px;border-color: #27262e;border-top-color: rgb(0,0,0);">Tytuł zgłoszenia</th>
                                    <th style="background: rgb(255,255,255);border-width: 1px;border-color: rgb(39,38,46);">Dział</th>
                                    <th style="background: rgb(255,255,255);border-width: 1px;border-color: var(--bs-table-bg);">Kategoria</th>
                                    <th style="background: rgb(255,255,255);border-width: 1px;border-color: var(--bs-table-bg);">Wykonano</th>
                                    <th class="text-center" style="background: rgb(255,255,255);border-width: 1px;border-color: var(--bs-table-bg);">Sprawdź</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-truncate" style="max-width: 200px;background: rgb(255,255,255);">Uszkodzony kran</td>
                                    <td class="text-truncate" style="max-width: 200px;background: rgb(255,255,255);">IT</td>
                                    <td style="background: rgb(255,255,255);">Superior</td>
                                    <td style="background: rgb(255,255,255);">TAK</td>
                                    <td class="text-center" style="background: rgb(255,255,255);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye-fill fs-5 text-primary">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                        </svg></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer" style="background: #2d2c38;">
                    <nav>
                        <ul class="pagination pagination-sm mb-0 justify-content-center">
                            <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item" style="color: var(--bs-pagination-active-color);"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" style="color: var(--bs-body-color);"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>