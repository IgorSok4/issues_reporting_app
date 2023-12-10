<?php include 'header.php'; ?>
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2" style="color: rgb(55,99,244);">Bazy danych w aplikacjach internetowych&nbsp;</p>
                        <h2 class="fw-bold"><span style="background-color: rgb(41, 41, 41);">Projekt PHP z MySQL</span><br><span style="background-color: rgb(41, 41, 41);">System zgłaszania błędów</span></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8" src="assets/img/brands/php-logo-vector.svg"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4" src="assets/img/brands/MySQL-Logo.png"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container text-center py-5">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <p class="mb-4" style="font-size: 1.6rem;">Dodaj nowe&nbsp;<a href="report.php" class="text-success"><strong>zgłoszenie</strong></a>&nbsp;</p>
            <?php else: ?>
            <p class="mb-4" style="font-size: 1.6rem;">
                <a href="signup.php">Zaloguj się</a>, aby dodać nowe&nbsp;
                <span class="text-success"><strong>zgłoszenie</strong></span>
                &nbsp;
            </p>
            <?php endif; ?>
        </div>
    </section>
<?php if (isset($_SESSION['login_status'])): ?>
<script>
    alert('<?php echo $_SESSION['login_status']; ?>');
</script>
<?php
    unset($_SESSION['login_status']);
endif;
?>
<?php include 'footer.php'; ?>