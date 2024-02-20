<?php include 'config.php';

$personelQuery = $pdo->prepare("SELECT * FROM lspd_personel WHERE id = :id");
$personelQuery->bindParam(':id', $_SESSION['lspd_personel'], PDO::PARAM_INT);
$personelQuery->execute();
$personel = $personelQuery->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <img class="image-fluid" src="/images/lspd.png" alt="" width="60px">
            <a class="navbar-brand" href="#">Los Santos Police Departmant Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mesai</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav ms-auto mb-2 me-2 mb-md-0">
                    <li class="nav-item me-auto align-self-center">
                        <p class="nav-link m-0 p-0">Hoşgeldin <?php echo "[" . $personel['code'] . "] " . $personel['ic_name'] . " / " .  $personel['occ_name'] ?></p>
                    </li>
                </ul>
                <a href="/logout.php" class="btn btn-outline-danger" type="submit">Çıkış Yap</a>
            </div>
        </div>
    </nav>