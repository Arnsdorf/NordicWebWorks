<?php
require "settings/init.php"; // Indlæs nødvendige opsætninger

// Hent 'case' parameteren fra URL'en
$caseIndex = isset($_GET['case']) ? $_GET['case'] : 1; // Standard til case 1, hvis ingen parameter er angivet

// Dynamisk indhold baseret på caseIndex
$caseData = [];
switch ($caseIndex) {
    case 1:
        $caseData = [
            "title" => "BuildMate",
            "description" => "BuildMate opstod, da en gruppe mennesker besluttede, at computerbygning var for kompliceret. De skabte en digital løsning med håbet om, at alle en dag vil kunne nyde den digitale verden uden bekymringer om, hvorvidt deres udstyr holder dem tilbage.",
            "image" => "uploads/chr/case1.webp",
            "techTags" => [".PHP", ".MySQL", ".JavaScript"]
        ];
        break;
    case 2:
        $caseData = [
            "title" => "Case 2",
            "description" => "Dette er en beskrivelse af et andet projekt, der fokuserer på forskellige aspekter af webudvikling.",
            "image" => "uploads/chr/case2.webp",
            "techTags" => [".Html", ".CSS", ".JavaScript"]
        ];
        break;
    case 3:
        $caseData = [
            "title" => "Case 3",
            "description" => "Dette er en anden case, der fremhæver dine evner inden for webudvikling.",
            "image" => "uploads/chr/case3.webp",
            "techTags" => [".Python", ".Django", ".SQL"]
        ];
        break;
    // Tilføj flere cases efter behov
    default:
        $caseData = [
            "title" => "Ukendt Case",
            "description" => "Der er ingen information tilgængelig for denne case.",
            "image" => "uploads/chr/unknown-case.jpg",
            "techTags" => [".Unknown"]
        ];
        break;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>NWW - <?php echo $caseData['title']; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Favicon -->
    <link rel="icon" href="uploads/sm_logo.png" type="image/x-icon">
</head>
<body>

<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <!-- Mobile version (Visible on small devices only) -->
        <div class="d-md-none m-0 p-0">
            <div id="mobile-img-container" class="col-12 m-0 p-0 position-relative" style="height: 45vh;">
                <img id="mobile-case-img" class="case-info-img col-12" src="<?php echo $caseData['image']; ?>" alt="Case Image" style="object-fit: cover; position: absolute; top: 0; z-index: 1;">
            </div>
            <div class="col-12 bg-custom-dark m-0 p-0">
                <div id="mobile-tech-tags" class="text-white d-flex justify-content-center mt-3 mb-3">
                    <div class="row" style="color: #7c7c7c">
                        <?php foreach($caseData['techTags'] as $tag): ?>
                            <h6 class="fw-medium col"><?php echo $tag; ?></h6>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id="case-container" class="ms-4 me-4 text-white mt-4">
                    <h1 class="fw-bold"><?php echo $caseData['title']; ?></h1>
                    <h6 class="fw-light pt-1" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c"><?php echo $caseData['description']; ?></h6>
                </div>
                <!-- Tilføj Forrige/Næste knapper til mobilversion -->
                <div class="d-flex ms-4 mt-4 mb-5">
                    <button id="prevBtn" class="btn-f small">Forrige</button>
                    <button id="nextBtn" class="btn-f small ms-5">Næste</button>

                </div>
            </div>
        </div>

        <!-- PC and Tablet version -->
        <div class="d-none d-md-block">
            <div class="row">
                <div id="desktop-img-container" class="col-4 m-0 p-0 position-relative" style="height: 100vh;">
                    <img id="desktop-case-img" class="case-info-img col-12" src="<?php echo $caseData['image']; ?>" alt="Case Image" style="object-fit: cover; position: absolute; top: 0;">
                </div>
                <div class="col-6 bg-custom-dark m-0 p-0">
                    <div id="desktop-tech-tags" class="col bg-custom-dark p-0 m-0 d-flex mt-3">
                        <div class="ms-5 text-white d-flex align-items-end">
                            <div class="row justify-content-between" style="color: #7c7c7c">
                                <?php foreach($caseData['techTags'] as $tag): ?>
                                    <h6 class="fw-medium col"><?php echo $tag; ?></h6>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div id="case-container-md" class="pt-17 ms-5 text-white mt-1">
                        <h1 class="fw-bold" style="font-size: 4rem"><?php echo $caseData['title']; ?></h1>
                        <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem"><?php echo $caseData['description']; ?></h6>
                    </div>
                    <!-- Tilføj Forrige/Næste knapper til desktopversion -->
                    <div class="d-flex ms-5 mt-4">
                        <button id="prevBtn-md" class="btn-f small">< Forrige /></button>
                        <button id="nextBtn-md" class="btn-f small ms-5">< Næste /></button>

                    </div>
                </div>
                <div class="col bg-custom-dark m-0 p-0 mt-5">
                    <h1 class="fw-bold" style="writing-mode: vertical-rl; font-size: 3.3rem; letter-spacing: 0.4rem; color: #343434">Case-Information</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="js/case.js"></script>

<!-- Footer -->
<?php include "includes/footer.php"; ?>



