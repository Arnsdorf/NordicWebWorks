<?php include "includes/header.php" ?>

<div class="d-flex justify-content-end m-0 p-0 position-sticky top-25 z-3">
    <div class="position-absolute d-none d-md-block">
        <h6 id="frontpage-link" class="text-white-50 fw-light"
            style="letter-spacing: 0.2rem;writing-mode: vertical-rl;font-family: 'Source Code Pro'">Frontpage</h6>
        <h6 id="service-link" class="text-white-50 fw-light mb-5 mt-5"
            style="letter-spacing: 0.2rem;writing-mode: vertical-rl;font-family: 'Source Code Pro'">Service</h6>
        <h6 id="cases-link" class="text-white-50 fw-light"
            style="letter-spacing: 0.2rem;writing-mode: vertical-rl;font-family: 'Source Code Pro'">Cases</h6>
        <a href="#services">
            <div class="arrow-box ms-4 mt-5 d-flex align-items-center justify-content-center">
                <div class="arrow"></div>
            </div>
        </a>
    </div>
</div>



<div class="container-fluid bg-front">
    <div class="row">

            <!-------Boxes-and-socials--------------->
            <div class="position-absolute bottom-0 ps-4 d-md-none mb-3" style="z-index: 3">
                <div class="scroll-animate"><i class="bi bi-instagram text-white social" style="font-size: 1.2rem"></i></div>
                <div class="mt-2 scroll-animate"><i class="bi bi-linkedin text-white social" style="font-size: 1.2rem"></i></div>
                <div class="mt-2 scroll-animate"><i class="bi bi-twitter text-white social" style="font-size: 1.2rem"></i></div>
                <div class="mt-2 mb-2 scroll-animate"><i class="bi bi-facebook text-white social" style="font-size: 1.2rem"></i></div>
            </div>
       

            <div class="position-absolute bottom-0 ps-4 d-none d-md-block ">
                    <div class=""><i class="bi bi-instagram social " style="font-size: 1.4rem"></i></div>
                    <div class="mt-3 "><i class="bi bi-linkedin social" style="font-size: 1.4rem"></i></div>
                    <div class="mt-3 "><i class="bi bi-twitter social" style="font-size: 1.4rem"></i></div>
                    <div class="mt-3 mb-3"><i class="bi bi-facebook social" style="font-size: 1.4rem"></i></div>
            </div>
            <!-------Boxes--------------->
            <div class="position-absolute bottom-0 pb-3 ps-3">
                <div class="box-s position-absolute ms-5 mb-5" style="pointer-events: none;"></div>
                <div class="box-b " style="pointer-events: none;"></div>
            </div>

            <!-------Tlf-frontpage----------->
            <div class="text-center position-absolute top-30">
                    <h6 class="font-front-s d-md-none scroll-animate">━━     Velkommen til Nordic Webworks ━━━━━</h6>
                    <h1 class="text-white fw-bold d-md-none font-type">Har <span class="font-drip">din
                        </span> virksomhed brug for en løsning<span class="font-drip">?</span></h1>

            <div class="mt-4 d-md-none">
                <div class="scroll-animate me-3 btn-f fw-bold small d-inline-flex justify-content-center align-items-center text-center m-0 drip">
                    <span>KONTAKT</div>
                <div class="btn-f scroll-animate small d-inline-flex justify-content-center align-items-center text-center m-0">
                    <span>CASES</span></div>
            </div>


            <!-------Tablet and pc size----------------------------------->
            <div class="ms-13 scroll-animate">
                <!-----TABLET------>
                <div class="w-51 text-md-start d-none d-md-block d-xl-none">
                    <h6 class="d-none d-md-block d-flex scroll-animate " style="color: #636363;font-family: 'Source Code Pro'">━━  Velkommen til Nordic Webworks ━━━━━</h6>
                    <h1 class="text-white d-none d-md-block front-font-b d-flex font-type scroll-animate">Har <span class="font-drip">din
                        </span> virksomhed brug for en løsning<span class="font-drip">?</span></h1>
                </div>
                <!-----PC--------->
                <div class="w-43 text-md-start d-md-none d-xl-block" id="frontpage">
                    <h5 class="d-none d-md-block d-flex scroll-animate" style="color: #636363;font-family: 'Source Code Pro'">━━  Velkommen til Nordic Webworks ━━━━━</h5>
                    <h1 class="text-white d-none d-md-block front-font-b d-flex font-type scroll-animate">Har <span class="font-drip">din</span>
                        virksomhed brug for en løsning<span class="font-drip">?</span></h1>
                </div>

                <div class="mt-4 text-md-start ms-md-8 d-none d-md-block scroll-animate">
                    <div class="me-3 fw-bold small btn-f d-inline-flex justify-content-center align-items-center text-center m-0 drip ">
                        <span>KONTAKT</span>
                    </div>
                    <div class="btn-f small d-inline-flex justify-content-center align-items-center text-center m-0 ">
                        <span>CASES</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-------services---------------------------------->
<section class="pt-8 mt-5 bg-custom-dark" id="services">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-10 col-lg-6 text-center scroll-animate">
                <h1 class="text-white display-6 fw-bold"><span class="text-purple">Services</span> & Ydelser</h1>
                <p class="text-white-50 small mt-3">
                    Vi tilbyder en bred vifte af ydelser, der er skræddersyet
                    til at imødekomme dine behov. Fra webudvikling til digital strategi,
                    vi hjælper dig med at opnå dine mål.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services-cards py-md-5 bg-custom-dark">
    <div class="container">
        <div class="row">
            <!-- Card 1 -->

            <div class="col-md-6 col-lg-3 mb-4 d-flex justify-content-center scroll-animate">

                <div class="card border-0 card-hover bg-cases h-100">
                    <div class="card-body text-white d-flex flex-column">
                        <div>
                            <img style="width: 40px" class="shadow pt-3 mb-3" src="uploads/icons/coding.png" alt="coding">
                            <h5 class="card-title fw-bold">Frontend Løsning</h5>
                            <p class="card-text fw-bold small text-white-50">
                                React.js • Angular • Vue.js
                            </p>
                        </div>
                        <div class="mt-auto">
                            <p class="card-text text-white-50 mt-2 small">
                                Vi leverer responsiv og dynamisk frontend-udvikling, der sikrer en problemfri oplevelse på tværs af alle enheder.
                            </p>
                            <div class="btn-f bg-transparent d-inline-flex border-white fw-bold justify-content-center align-items-center text-center">
                                <span class="small">Læs Mere</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3 mb-4 d-flex justify-content-center scroll-animate">
                <div class="card border-0 card-hover bg-cases h-100">
                    <div class="card-body text-white d-flex flex-column">
                        <div>
                            <img style="width: 40px" class="shadow mb-3 pt-3" src="uploads/icons/database.png" alt="coding">
                            <h5 class="card-title fw-bold">Backend Udvikling</h5>
                            <p class="card-text fw-bold small text-white-50">
                                PHP • Databaser • API'er
                            </p>
                        </div>
                        <div class="mt-auto">
                            <p class="card-text small mt-2 text-white-50">
                                Vores backend-løsninger sikrer, at din hjemmeside eller applikation fungerer effektivt og sikkert i baggrunden.
                            </p>
                            <div class="btn-f bg-transparent d-inline-flex border-white fw-bold justify-content-center align-items-center text-center">
                                <span class="small">Læs Mere</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->

            <div class="col-md-6 col-lg-3 mb-4 d-flex justify-content-center scroll-animate">

                <div class="card border-0 card-hover bg-cases h-100">
                    <div class="card-body text-white d-flex flex-column">
                        <div>
                            <img style="width: 40px" class="shadow mb-3 pt-3" src="uploads/icons/interface.png" alt="coding">
                            <h5 class="card-title fw-bold">Webdesign & UX/UI</h5>
                            <p class="card-text fw-bold small text-white-50">
                                Identitet • Prototyper • Testing
                            </p>
                        </div>
                        <div class="mt-auto">
                            <p class="card-text mt-2 text-white-50 small">
                                Vi skaber moderne og intuitive webdesigns, der engagerer brugere og konverterer besøgende til kunder.
                            </p>
                            <div class="btn-f bg-transparent d-inline-flex border-white fw-bold justify-content-center align-items-center text-center">
                                <span class="small">Læs Mere</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 ---->

            <div class="col-md-6 col-lg-3 mb-4 d-flex justify-content-center scroll-animate">

                <div class="card border-0 card-hover bg-cases h-100">
                    <div class="card-body text-white d-flex flex-column">
                        <div>
                            <img style="width: 40px" class="shadow mb-3 pt-3" src="uploads/icons/api.png" alt="coding">
                            <h5 class="card-title fw-bold">API Integration</h5>
                            <p class="card-text fw-bold small text-white-50">
                                API Endpoint • RESTful • API Nøgle
                            </p>
                        </div>
                        <div class="mt-auto">
                            <p class="card-text mt-2 text-white-50 small">
                                Vi integrerer tredjeparts API'er for at forbedre funktionaliteten og effektiviteten af din applikation.
                            </p>
                            <div class="btn-f bg-transparent d-inline-flex border-white fw-bold justify-content-center align-items-center text-center">
                                <span class="small">Læs Mere</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!------------Cases-------------->
    <div class="container-fluid m-0 p-0 mt-5 pt-5 mb-5 pb-5 scroll-animate" id="cases">
        <div class="row p-0 m-0 justify-content-center">
            <div class="mt-5 ">
                <h1 class="text-white mt-5 mb-5 font-case col-5 ms-11 d-none d-md-block scroll-animate" style="font-size: 2.7rem"> <span class="fw-light text-white-50" style="font-size: 1.2rem;font-family: 'Source Code Pro'">Intreasseret i vores erfaringer?</span> <br> Tjek vores <span class="text-purple">tidligere projekter</span> ud!</h1>
                <h2 class="text-white mt-5 mb-5 font-case col-12 d-md-none scroll-animate ps-3" style="font-size: 2rem"> <span class="fw-light text-white-50" style="font-size: 1rem">Intreasseret i vores erfaringer?</span> <br> Tjek vores <span class="text-purple">tidligere projekter</span> ud!</h2>
            </div>

          
                 <div class="col-7 m-0 p-0 ">
                     <!------------Cases-cards 1-------------->
                     <div class="col-12 case-g mt-2 d-none d-md-block" style="height: 25vh">
                         <div class="col-12 case-header-g justify-content-end d-flex align-items-center" style="height: 4vh">
                             <div class="mt-3 ps-5 col-12"><p class="">Kommer Snart.exe</p></div>
                             <div class="col-6 me-1 case-extra justify-content-start" style="height: 1.2rem;width: 1.2rem"></div>
                         </div>
                         <div class="text-white justify-content-center d-flex font-glitch">
                             <h1 class="mt-3" style="letter-spacing: 0.2rem;font-family: 'Source Code Pro'">Kommer-snart</h1>
                         </div>
                         <div class="text-white justify-content-center d-flex">
                             <h2 class="" style="letter-spacing: 0.2rem;font-family: 'Source Code Pro'; font-weight: lighter">Loading</h2>
                         </div>
                         <div class="ms-5 me-5 " style="background: #8a8a8a"><div class="loading font-glitch"></div></div>
                     </div>
                     <!------------Cases-cards 2-------------->
                     <div class="col-12 case mt-2 d-none d-md-block" style="">
                         <div class="col-12 case-header justify-content-end d-flex align-items-center" style="height: 4vh">
                             <div class="mt-3 ps-5 col-12"><p class="">BuildMate.exe</p></div>
                             <div class="col-6 me-1 case-extra" style="height: 1.2rem;width: 1.2rem"></div>
                         </div>

                         <div class="col-12 d-flex m-0 p-0">
                             <div class="col-5 pt-4 d-flex">
                                <div class="pt-2 pb-2 ps-2 pe-2 ms-5" style="border: #ffffff solid 1px"><img class="text-white" src="uploads/folder2.svg" alt="" style=";width: 3.2rem;"></div>
                                <h3 class="ms-4 text-white my-auto" style="font-family: 'Source Code Pro'">BuildMate</h3>
                             </div>

                             <div class="d-flex col justify-content-end">
                                 <h6 class="my-auto text-white pe-3" style="letter-spacing: 0.1rem;font-family: 'Source Code Pro'; font-weight: lighter">Dato: 09-09-2024</h6>
                             </div>

                         </div>

                         <div class="col-12 p-0 m-0 d-flex">
                             <div class="col-md-8 pb-3">
                                 <h5 class="ps-5 pt-3" style="color: #195fc5">Projekt-info</h5>
                                 <p class="ps-5 text-white">Hej med dig, dette er en beskrivelse som ultimativt bare er en test
                                 for at se om dette virker angående spacing på kortet. Nu begynder jeg at skrive ekstra tekst, for at
                                 forlænge feltet jeg skriver i.</p>
                             </div>
                             <div class="d-flex justify-content-end my-auto pe-3 col-md-4">
                                 <div class="btn-f"><span class="">< / Næste ></span></div>
                             </div>
                         </div>

                     </div>
                     <!------------Cases-cards 3-------------->
                     <div class="col-12 case mt-2 d-none d-md-block" style="">
                         <div class="col-12 case-header justify-content-end d-flex align-items-center" style="height: 4vh">
                             <div class="mt-3 ps-5 col-12"><p class="">BuildMate.exe</p></div>
                             <div class="col-6 me-1 case-extra" style="height: 1.2rem;width: 1.2rem"></div>
                         </div>

                         <div class="col-12 d-flex m-0 p-0">
                             <div class="col-5 pt-4 d-flex">
                                 <div class="pt-2 pb-2 ps-2 pe-2 ms-5" style="border: #ffffff solid 1px"><img class="text-white" src="uploads/folder2.svg" alt="" style=";width: 3.2rem;"></div>
                                 <h3 class="ms-4 text-white my-auto" style="font-family: 'Source Code Pro'">Case-1</h3>
                             </div>

                             <div class="d-flex col justify-content-end">
                                 <h6 class="my-auto text-white pe-3" style="letter-spacing: 0.1rem;font-family: 'Source Code Pro'; font-weight: lighter">Dato: 09-09-2024</h6>
                             </div>

                         </div>

                         <div class="col-12 p-0 m-0 d-flex">
                             <div class="col-md-8 pb-3">
                                 <h5 class="ps-5 pt-3 " style="color: #195fc5">Projekt-info</h5>
                                 <p class="ps-5 text-white">Hej med dig, dette er en beskrivelse som ultimativt bare er en test
                                     for at se om dette virker angående spacing på kortet.</p>
                             </div>
                             <div class="d-flex justify-content-end my-auto pe-3 col-md-4">
                                 <div class="btn-f"><span class="">< / Næste ></span></div>
                             </div>
                         </div>

                     </div>
                     
                     
                 </div>
                    <!------------Cases-cards 4-------------->
            <div class="col-md-3 col-11 case m-0 p-0 ms-md-2 mt-md-2 ">
                <div class="col-12 case-header justify-content-end d-flex align-items-center" style="height: 4vh">
                    <div class="mt-3 ps-5 col-12"><p class="">Info.exe</p></div>
                    <div class="col-6 me-1 case-extra" style="height: 1.2rem;width: 1.2rem"></div>
                </div>

                <div class="caseinfo col-12 d-flex pt-3 pb-3">
                        <div class="my-auto p-2 ms-4" style="border: #ffffff solid 1px"><img class="text-white" src="uploads/folder2.svg" alt="" style=";width: 3.2rem;"></div>
                        <div class="col-6 my-auto ms-3"><h5 class="text-white">BuildMate <br>
                            <span class="" style="font-family: 'Source Code Pro'; font-weight: lighter;font-size: 1rem">Computer-Bygning</span></h5></div>
                </div>
                <div class="caseinfo col-12 d-flex pt-3 pb-3">
                    <div class="my-auto p-2 ms-4" style="border: #ffffff solid 1px"><img class="text-white" src="uploads/folder2.svg" alt="" style=";width: 3.2rem;"></div>
                    <div class="col-6 my-auto ms-3"><h5 class="text-white">Case 1<br>
                            <span class="" style="font-family: 'Source Code Pro'; font-weight: lighter;font-size: 1rem">Computer-Bygning</span></h5></div>
                </div>
            </div>


        </div>
    </div>





<script src="js/section.js"></script>
<script src="js/scroll-in.js"></script>
<script src="js/click..js"></script>
<script src="js/scroll.js"></script>
<?php include "includes/footer.php" ?>

