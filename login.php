<?php include 'config.php';

if (isset($_POST['lspdCode'])) {
    $rozetKodu = $_POST['lspdCode'];
    $sorgu = $pdo->prepare("SELECT * FROM lspd_personel WHERE code = :code");
    $sorgu->bindParam(':code', $rozetKodu, PDO::PARAM_STR);
    $sorgu->execute();
    $personel = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($personel) {
        $_SESSION['lspd_personel'] = $personel['id'];
        header('Location: index.php');
    } else {
        echo 'Rozet kodu hatalı';
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-body-tertiary">

    <section class="d-flex justify-content-center align-items-center py-4">

        <main class="container d-flex justify-content-center form-signin w-100 m-auto">
            <form action="" method="POST" class="col-5">
                <img class="mb-4" src="/images/lspd.png" alt="" width="100">
                <h1 class="h3 mb-3 fw-normal">Giriş Yap</h1>

                <div class="form-floating mb-3">
                    <input type="text" name="lspdCode" class="form-control" id="lspdCode" placeholder="[XXX]">
                    <label for="lspdCode">Rozet Kodu</label>
                </div>
                <!-- <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Şifre</label>
            </div> -->

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" checked disabled>
                    <label class="form-check-label" for="flexCheckDefault">
                        Beni Hatırla
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Giriş Yap</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; LSPD</p>
            </form>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>