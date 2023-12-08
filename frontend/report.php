<?php 
include 'header.php'; 
include '../backend/db.php';

$kategorie = [];
$sql = "SELECT ID, nazwa FROM kategoria_zgloszenia";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kategorie[] = $row;
    }
}
?>

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
            <form method="post" action="/issues_reporting_app/backend/process_report.php">
                <div class="card shadow mb-3" style="border-color: var(--bs-card-cap-bg);">
                    <div class="card-header py-3" style="background: rgb(45,44,56);border-color: var(--bs-card-cap-bg);">
                        <p class="text-primary m-0 fw-bold" style="color: var(--bs-body-color);"><span style="color: rgb(255, 255, 255);">Wypełnij wymagane pola *</span></p>
                    </div>
                    <div class="card-body" style="background: #2d2c38;">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label" for="tytul"><strong>Tytuł zgłoszenia *</strong></label>
                                    <input class="form-control" type="text" id="tytul" name="tytul" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="id_kategorii"><strong>Kategoria zgłoszenia*</strong></label>
                                    <select class="form-control" id="id_kategorii" name="id_kategorii" required>
                                        <option value="">Wybierz kategorię</option>
                                        <?php foreach($kategorie as $kategoria): ?>
                                            <option value="<?php echo $kategoria['ID']; ?>">
                                                <?php echo htmlspecialchars($kategoria['nazwa']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="opis"><strong>Opis zgłoszenia*</strong></label>
                            <textarea class="form-control" id="opis" name="opis" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Zgłoszenie priorytetowe? *</strong></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="piorytet-1" name="piorytet" value="1" required>
                                <label class="form-check-label" for="piorytet-1">Tak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="piorytet-0" name="piorytet" value="0" required>
                                <label class="form-check-label" for="piorytet-0">Nie</label>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="imie_nazwisko"><strong>Imię i nazwisko zgłaszającego *</strong></label>
                                <input class="form-control" id="imie_nazwisko" name="imie_nazwisko" required>
                            </div>
                            </div>
                            <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="oddzial"><strong>Oddział *</strong></label>
                                <input class="form-control" id="oddzial" name="oddzial" required>
                            </div>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                    </div>
                </div>
                <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Zapisz zgłoszenie</button></div>
            </form>
        </div>
    </section>
<?php if (isset($_SESSION['report_status'])): ?>
<script>
    alert('<?php echo $_SESSION['report_status']; ?>');
</script>
<?php
    unset($_SESSION['report_status']);
endif;
?>
<?php include 'footer.php'; ?>