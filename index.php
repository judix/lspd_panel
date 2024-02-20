<?php
include 'header.php';

if (!isset($_SESSION['lspd_personel'])) {
    header('Location: login.php');
}
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hoşgeldiniz</h2>
                <p>LSPD Personel Paneline Hoşgeldiniz.</p>
            </div>
            <div class="col-6">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between">Mesai Sistemi <span class="text-success-emphasis">Mesaidesin</span></h5>
                        <hr>

                        <p class="card-text">İlk Mesai Giriş Tarihin: <small class="text-body-secondary">22/11/2023</small></p>
                        <p class="card-text">Toplam Mesai Saatin: <small class="text-body-secondary">2 Gün 5 Saat</small></p>
                        <p class="card-text">Bu Haftaki Mesai Saatin: <small class="text-body-secondary">23 Saat</small></p>

                        <button class="btn btn-danger">Mesai Çık</button>
                        <button class="btn btn-success">Mesai Gir</button>
                    </div>
                    <img src="/images/altlogo.png" class="card-img-bottom" alt="logo">
                </div>
            </div>
            <div class="col-6">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between">Tüm Mesailerin<span class="text-success-emphasis">Mesaidesin</span></h5>
                        <hr>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <p class="card-text">Mesai Giriş Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Mesai Çıkış Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Toplam Mesai Saati: <br><small class="text-body-secondary">2 Gün 5 Saat</small></p>
                            </div>
                            <hr class="col-6 mx-auto">
                            <div class="col-12 d-flex justify-content-between">
                                <p class="card-text">Mesai Giriş Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Mesai Çıkış Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Toplam Mesai Saati: <br><small class="text-body-secondary">2 Gün 5 Saat</small></p>
                            </div>
                            <hr class="col-6 mx-auto">
                            <div class="col-12 d-flex justify-content-between">
                                <p class="card-text">Mesai Giriş Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Mesai Çıkış Tarihi: <br><small class="text-body-secondary">22/11/2023</small></p>
                                <p class="card-text">Toplam Mesai Saati: <br><small class="text-body-secondary">2 Gün 5 Saat</small></p>
                            </div>
                        </div>
                    </div>
                    <img src="/images/altlogo.png" class="card-img-bottom" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>