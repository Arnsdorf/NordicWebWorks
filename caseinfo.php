<?php include "includes/header.php"; ?>
<?php
global $cases;

require "casedata.php"; // Hent case data

// Hent 'case' parameteren fra URL'en
$caseIndex = isset($_GET['case']) ? intval($_GET['case']) : 1; // Standard til case 1

// Find den valgte case, hvis den findes, ellers default til case 1
$caseData = isset($cases[$caseIndex]) ? $cases[$caseIndex] : $cases[1];

// Navigationslogik for forrige og næste case
$prevCase = $caseIndex > 1 ? $caseIndex - 1 : count($cases); // Tilbage til sidste case hvis vi er på den første
$nextCase = $caseIndex < count($cases) ? $caseIndex + 1 : 1;  // Gå til første case hvis vi er på den sidste
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title><?php echo $caseData['title']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <!-- Mobile version (Visible on small devices only) -->
        <div class="d-md-none m-0 p-0">
            <div id="mobile-img-container" class="col-12 m-0 p-0 position-relative" style="height: 45vh;">
                <img id="mobile-case-img" class="case-info-img col-12" src="<?php echo $caseData['image']; ?>" alt="Case Image" style="object-fit: cover; position: absolute; top: 0;">
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
                    <?php if(isset($caseData['features'])): ?>
                        <div class="container p-0 mb-5 border-0 bg-cases mt-5">
                            <div class="accordion accordion-flush" id="mobileAccordion">
                                <?php $i = 0; ?>
                                <?php foreach ($caseData['features'] as $featureTitle => $featureDesc): ?>
                                    <div class="accordion-item border-bottom">
                                        <h2 class="accordion-header border-top" id="mobileHeading<?php echo $i; ?>">
                                            <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapse<?php echo $i; ?>" aria-expanded="false" aria-controls="mobileCollapse<?php echo $i; ?>">
                                                <?php echo $featureTitle; ?>
                                            </button>
                                        </h2>
                                        <div id="mobileCollapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="mobileHeading<?php echo $i; ?>" data-bs-parent="#mobileAccordion">
                                            <div class="accordion-body text-white">
                                                <p><?php echo $featureDesc; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Forrige og Næste knapper til mobil -->
                <div class="d-flex justify-content-center mt-4 mb-5">
                    <a href="caseinfo.php?case=<?php echo $prevCase; ?>" class="btn-f small">< FORRIGE /></a>
                    <a href="caseinfo.php?case=<?php echo $nextCase; ?>" class="btn-f small ms-5">< NÆSTE /></a>
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
                            <div class="row justify-content-between pt-5" style="color: #7c7c7c">
                                <?php foreach($caseData['techTags'] as $tag): ?>
                                    <h6 class="fw-medium col"><?php echo $tag; ?></h6>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div id="case-container-md" class="pt-17 ms-5 text-white mt-1">
                        <h1 class="fw-bold" style="font-size: 4rem"><?php echo $caseData['title']; ?></h1>
                        <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem"><?php echo $caseData['description']; ?></h6>
                        <div class="container p-0 mb-5 border-0 bg-cases mt-5">
                            <div class="accordion accordion-flush w-75" id="desktopAccordion">
                                <?php $i = 0; ?>
                                <?php foreach ($caseData['features'] as $featureTitle => $featureDesc): ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header border-top" id="heading<?php echo $i; ?>">
                                            <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                                <?php echo $featureTitle; ?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#desktopAccordion">
                                            <div class="accordion-body text-white">
                                                <p><?php echo $featureDesc; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Forrige og Næste knapper -->
                    <div class="d-flex ms-5 mt-4">
                        <a href="caseinfo.php?case=<?php echo $prevCase; ?>" class="btn-f small"> < FORRIGE /></a>
                        <a href="caseinfo.php?case=<?php echo $nextCase; ?>" class="btn-f small ms-5">< NÆSTE /></a>
                    </div>
                </div>

                <div class="col bg-custom-dark m-0 p-0 mt-5">
                    <h1 class="fw-bold" style="writing-mode: vertical-rl; font-size: 3.3rem; letter-spacing: 0.4rem; color: #343434">Case-Information</h1>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
