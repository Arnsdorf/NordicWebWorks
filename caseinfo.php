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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <!-- Favicon -->
        <link rel="icon" href="uploads/sm_logo.png" type="image/x-icon">
    </head>



    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0">

            <!-- Mobile version (Visible on small devices only) -->
            <div class="d-md-none m-0 p-0"> <!-- This div is visible on mobile devices only -->
                <!-- Image section for small devices -->
                <div id="mobile-img-container" class="col-12 m-0 p-0 position-relative" style="height: 25vh;">
                    <div class="impro-nav col-12" style="height: 4vh; position: absolute; z-index: 2;"></div>
                    <img id="mobile-case-img" class="case-info-img col-12" src="uploads/chr/luca-bravo-9l_326FISzk-unsplash.jpg" alt="#" style="object-fit: cover; position: absolute; top: 0; z-index: 1;">
                </div>

                <!-- Case information and navigation for small devices -->
                <div class="col-12 bg-custom-dark m-0 p-0">
                    <div id="mobile-tech-tags" class="text-white d-flex justify-content-center mt-3 mb-3">
                        <div class="row" style="color: #7c7c7c">
                            <!-- Language/Technology Tags -->
                            <h6 class="fw-light col">.Php</h6>
                            <h6 class="fw-light ms-4 me-4 col">.SQL</h6>
                            <h6 class="fw-light col">.JavaScript</h6>
                        </div>
                    </div>

                    <!-- Case Information Container (small devices) -->
                    <div id="case-container" class="ms-4 me-4 text-white mt-4 ">
                        <!-- Each case info -->
                        <div class="case-info active">
                            <img src="uploads/chr/luca-bravo-9l_326FISzk-unsplash.jpg" alt="Case 1 Image" class="case-image d-none">
                            <div class="tech-tags d-none">
                                <h6 class="fw-light col">.Php</h6>
                                <h6 class="fw-light ms-4 me-4 col">.SQL</h6>
                                <h6 class="fw-light col">.JavaScript</h6>
                            </div>
                            <h1 class="fw-bold">BuildMate</h1>
                            <h6 class="fw-light pt-1" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Computer bygnings projekt.</h6>
                            <h6 class="fw-light pt-3" style="letter-spacing: 0.1rem;line-height: 1.5rem">BuildMate opstod da en flok mennesker beslutter sig for computerbygning var for kompliceret.
                                En digital løsning blev kreaeret af denne folk mennesker, i håber om at alle en dag skulle kunne nyde den digitale verden
                                uden bekymring for om deres udstyr holder dem tilbage.</h6>
                        </div>
                        
                        <div class="case-info">
                            <img src="uploads/another-image.jpg" alt="Case 2 Image" class="case-image d-none">
                            <div class="tech-tags d-none">
                                <h6 class="fw-light col">.Html</h6>
                                <h6 class="fw-light ms-4 me-4 col">.CSS</h6>
                                <h6 class="fw-light col">.JavaScript</h6>
                            </div>
                            <h1 class="fw-bold">Case 2</h1>
                            <h6 class="fw-light pt-1" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Another project.</h6>
                            <h6 class="fw-light pt-3" style="letter-spacing: 0.1rem;line-height: 1.5rem">This is a description of another project that focuses on a different aspect of web development...</h6>
                        </div>
                        
                        <div class="case-info">
                            <img src="uploads/yet-another-image.jpg" alt="Case 3 Image" class="case-image d-none">
                            <div class="tech-tags d-none">
                                <h6 class="fw-light col">.Python</h6>
                                <h6 class="fw-light ms-4 me-4 col">.Django</h6>
                                <h6 class="fw-light col">.SQL</h6>
                            </div>
                            <h1 class="fw-bold">Case 3</h1>
                            <h6 class="fw-light pt-1" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Yet another project.</h6>
                            <h6 class="fw-light pt-3" style="letter-spacing: 0.1rem;line-height: 1.5rem">Description of yet another case that showcases your skills...</h6>
                        </div>
                        <!-- Add more cases as needed -->
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="mt-5 d-flex justify-content-center">
                        <div id="prevBtn" class="btn-f small d-inline-flex justify-content-center align-items-center text-center m-0 me-1">
                            <span>< FORRIGE</span> <!-- Previous button -->
                        </div>
                        <div id="nextBtn" class="btn-f small d-inline-flex justify-content-center align-items-center text-center m-0 ms-1">
                            <span>NÆSTE ></span> <!-- Next button -->
                        </div>
                    </div>
                </div>

                <!-- Section title for small devices -->
                <div class="col bg-custom-dark m-0 p-0 d-flex ms-3 mt-4">
                    <h1 class="fw-bold justify-content-center"
                        style="font-size: 2.2rem;  letter-spacing: 0.4rem; color: #343434">Case-Information</h1>
                </div>
            </div>

            <!-- PC and Tablet version (Visible on medium and larger devices only) -->
            <div class="d-none d-md-block"> <!-- This div is visible on tablets and PCs only -->
                <div class="row">
                    <!-- Left image section for larger screens -->
                    <div id="desktop-img-container" class="col-4 m-0 p-0 position-relative" style="height: 100vh;">
                        <div class="impro-nav col-2" style="height: 100vh; position: absolute; z-index: 2;"></div>
                        <img id="desktop-case-img" class="case-info-img col-12" src="uploads/chr/luca-bravo-9l_326FISzk-unsplash.jpg" alt="#" style="object-fit: cover; position: absolute; top: 0; z-index: 1;">
                    </div>

                    <!-- Case Information for larger screens -->
                    <div class="col-6 bg-custom-dark m-0 p-0">
                        <div id="desktop-tech-tags" class="col bg-custom-dark p-0 m-0 d-flex mt-3">
                            <div class="ms-5 text-white d-flex align-items-end">
                                <div class="row justify-content-between" style="color: #7c7c7c">
                                    <!-- Technology Tags for larger devices -->
                                    <h6 class="fw-light col">.Php</h6>
                                    <h6 class="fw-light ms-5 me-5 col">.SQL</h6>
                                    <h6 class="fw-light col">.JavaScript</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Case Information Container (larger screens) -->
                        <div id="case-container-md" class="pt-17 ms-5 text-white mt-1">
                            <!-- Case 1 -->
                            <div class="case-info active">
                                <img src="uploads/chr/luca-bravo-9l_326FISzk-unsplash.jpg" alt="Case 1 Image" class="case-image d-none">
                                <div class="tech-tags d-none">
                                    <h6 class="fw-light col">.Php</h6>
                                    <h6 class="fw-light ms-5 me-5 col">.SQL</h6>
                                    <h6 class="fw-light col">.JavaScript</h6>
                                </div>
                                <h1 class="fw-bold" style="font-size: 4rem">BuildMate</h1>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Computer bygnings projekt.</h6>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem">BuildMate opstod da en flok mennesker beslutter sig for computerbygning var for kompliceret.
                                    En digital løsning blev kreaeret af denne folk mennesker, i håber om at alle en dag skulle kunne nyde den digitale verden
                                    uden bekymring for om deres udstyr holder dem tilbage.</h6>
                            </div>
                            <!-- Case 2 -->
                            <div class="case-info">
                                <img src="uploads/chr3.jpg" alt="Case 2 Image" class="case-image d-none">
                                <div class="tech-tags d-none">
                                    <h6 class="fw-light col">.Html</h6>
                                    <h6 class="fw-light ms-5 me-5 col">.CSS</h6>
                                    <h6 class="fw-light col">.JavaScript</h6>
                                </div>
                                <h1 class="fw-bold" style="font-size: 4rem">Case 2</h1>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Another project.</h6>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem">This is a description of another project that focuses on a different aspect of web development...</h6>
                            </div>
                            <!-- Case 3 -->
                            <div class="case-info">
                                <img src="uploads/chr/muhmed-alaa-el-bank-tkSqiW0qFJU-unsplash.jpg" alt="Case 3 Image" class="case-image d-none">
                                <div class="tech-tags d-none">
                                    <h6 class="fw-light col">.Python</h6>
                                    <h6 class="fw-light ms-5 me-5 col">.Django</h6>
                                    <h6 class="fw-light col">.SQL</h6>
                                </div>
                                <h1 class="fw-bold" style="font-size: 4rem">Case 3</h1>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Yet another project.</h6>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem">Description of yet another case that showcases your skills...</h6>
                            </div>

                            <div class="case-info">
                                <img src="uploads/chr/nat-hwcMLF374mY-unsplash.jpg" alt="Case 3 Image" class="case-image d-none">
                                <div class="tech-tags d-none">
                                    <h6 class="fw-light col">.Python</h6>
                                    <h6 class="fw-light ms-5 me-5 col">.Django</h6>
                                    <h6 class="fw-light col">.SQL</h6>
                                </div>
                                <h1 class="fw-bold" style="font-size: 4rem">Case 5</h1>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem;color: #7c7c7c">Yet another project.</h6>
                                <h6 class="fw-light pt-3 col-8" style="letter-spacing: 0.1rem;line-height: 1.5rem">Description of yet another case that showcases your skills...</h6>
                            </div>
                            <!-- Add more cases as needed -->

                        </div>

                        <!-- Navigation Buttons -->
                        <div class="ms-5 mt-5">
                            <div id="prevBtn-md" class="btn-f small d-inline-flex justify-content-center align-items-center text-center m-0 me-3">
                                <span>< FORRIGE</span> <!-- Previous button -->
                            </div>
                            <div id="nextBtn-md" class="btn-f small d-inline-flex justify-content-center align-items-center text-center m-0">
                                <span>NÆSTE ></span> <!-- Next button -->
                            </div>
                        </div>
                    </div>

                    <!-- Section title for larger devices -->
                    <div class="col bg-custom-dark m-0 p-0 mt-5">
                        <h1 class="fw-bold"
                            style="writing-mode: vertical-rl; font-size: 3.3rem;  letter-spacing: 0.4rem; color: #343434">Case-Information</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/case.js">







<?php include "includes/footer.php" ?>