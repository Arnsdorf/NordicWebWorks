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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Favicon -->
    <link rel="icon" href="uploads/logo/nw_favicon.svg" type="image/x-icon">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-nav border-bottom-gray navbar-blur">
    <div class="container-fluid">
        <img src="uploads/logo/nw_logo1.svg" class="ms-2 ms-md-4 d-flex mt-2 mb-2 align-items-center" alt="Nordic Web Works Logo" onclick="window.location.href='index.php';" style="max-width: 140px; cursor: pointer;">
        <button class="navbar-toggler p-0 mx-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center justify-content-md-end" id="navbarNav">
            <ul class="navbar-nav mx-4 mt-2 align-items-center">
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="index.php">HJEM</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="index.php#services">SERVICES</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="meettheteam.php#meet">MØD HOLDET</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="contact.php">KONTAKT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



</body>
</html>