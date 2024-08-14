<?php

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>NWW</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-nav border-bottom-gray navbar-blur">
    <div class="container-fluid">
        <a class="text-white fw-bold ms-md-4 d-flex align-items-center" href="index.php">NordicWebWorks<i class="ms-3 text-white"></i></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center align-items-center justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center mx-md-4">
                <li class="nav-item">
                    <a class="nav-link text-white mt-1 mx-3" href="index.php"><span class="">HJEM</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mt-1 mx-3" href=""><span class="">SERVICES</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mt-1 mx-3" href="moedholdet.php"><span class="">MØD HOLDET</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mt-1 mx-3" href=""><span class="">KONTAKT</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
