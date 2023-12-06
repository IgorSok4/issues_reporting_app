<?php include 'header.php'; ?>
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Dodaj nowe zgłoszenie</p>
                    <h3 class="fw-bold">Wypełnij poniższy formularz w celu zgłoszenia nieprawidłowości</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="border-color: var(--bs-card-cap-bg);">
            <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
            <form>
                <div class="card shadow mb-3" style="border-color: var(--bs-card-cap-bg);">
                    <div class="card-header py-3" style="background: rgb(45,44,56);border-color: var(--bs-card-cap-bg);">
                        <p class="text-primary m-0 fw-bold" style="color: var(--bs-body-color);"><span style="color: rgb(255, 255, 255);">Wypełnij wymagane pola *</span></p>
                    </div>
                    <div class="card-body" style="background: #2d2c38;">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Tytuł zgłoszenia *</strong></label><input class="form-control" type="text" id="service_name" placeholder="Ogólny opis zgłoszenia" name="service_name" required=""></div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="mb-3"><label class="form-label" for="service_price"><strong>Kategoria zgłoszenia*</strong></label><input class="form-control" type="text" id="service_price" placeholder="Wybierz z listy" name="client_phone" required=""></div>
                            </div>
                        </div>
                        <div class="mb-3"><label class="form-label" for="client_description"><strong>Opis zgłoszenia*</strong></label><textarea class="form-control" id="service_description" rows="4" name="service_description" placeholder="Pełny opis zgłoszenia" required=""></textarea></div>
                        <div class="mb-3"><label class="form-label" for="service_client_payment_validated"><strong>Zgłoszenie priorytetowe? *</strong></label>
                            <div class="form-group mb-3">
                                <div class="form-check"><input class="form-check-input" type="radio" id="service_client_payment_validated-1" name="RadioOption" required=""><label class="form-check-label" for="service_client_payment_validated-1">Tak</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="service_client_payment_validated-2" name="RadioOption" required=""><label class="form-check-label" for="service_client_payment_validated-2">Nie</label></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Imię i nazwisko zgłaszającego *&nbsp;</strong></label><input class="form-control" id="service_client_start_date" type="" name="service_client_start_date" required=""></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="service_client_end_date"><strong>Oddział *</strong></label><input class="form-control" id="service_client_end_date" type="" name="service_client_end_date" required=""></div>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                    </div>
                </div>
                <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Zapisz zgłoszenie</button></div>
            </form>
        </div>
    </section>
<?php include 'footer.php'; ?>