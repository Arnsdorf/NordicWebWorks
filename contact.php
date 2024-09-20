<?php
// Start output-buffering for at undgå header-fejl
ob_start();

// Inkluder din header-fil, som også starter sessionen
include "includes/header.php";

// Fejlvisning for debugging (fjern i produktion)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Din Secret Key fra Google reCAPTCHA
$secretKey = '6LfaxkEqAAAAAFWo14IfpHQ4plmxsKcsFIZDKdHN';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificer reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';

    $response = file_get_contents($recaptchaUrl . '?secret=' . $secretKey . '&response=' . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA var succesfuld
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "nordic@nordicwebworks.dk";  // Modtagerens e-mailadresse

        $mail = new PHPMailer(true);

        try {
            // PHPMailer SMTP-indstillinger
            $mail->isSMTP();
            $mail->Host = 'websmtp.simply.com';  // Simply's script SMTP-server
            $mail->SMTPAuth = true;
            $mail->Username = 'sigurddam@nordicwebworks.dk';  // Din Simply.com e-mailadresse
            $mail->Password = 'nordic2001';  // Adgangskoden til din Simply.com e-mailadresse
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Brug STARTTLS
            $mail->Port = 587;  // Port 587 til Simply's SMTP-server

            // Debugging (fjern eller indstil til 0 i produktion)
            $mail->SMTPDebug = 2;  // Vis detaljeret debug-output for fejlsøgning
            $mail->Debugoutput = 'html';  // Output i HTML-format

            // Afsender og modtager
            $mail->setFrom('sigurddam@nordicwebworks.dk', 'Kontaktformular');  // Afsenderens e-mailadresse (din e-mail)
            $mail->addAddress($to);  // Modtagerens e-mailadresse (kan være en anden e-mail)

            // E-mailindhold
            $mail->isHTML(true);
            $mail->Subject = 'Ny besked fra NWW Page';
            $mail->Body = "Navn: $name $lastname<br>E-mail: $email<br><br>Besked:<br>$message";

            // Send e-mail
            $mail->send();

            // Gem successtatus i session og omdiriger
            $_SESSION['modal'] = 'success';
        } catch (Exception $e) {
            // Hvis fejl, gem modal status som error og log fejlen
            $_SESSION['modal'] = 'error';
            error_log("Mailer Error: " . $mail->ErrorInfo);  // Log eventuelle fejl til en serverlog
        }

        // Omdiriger for at undgå gentagelse af POST-forespørgsel
        header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']));
        exit();
    } else {
        // reCAPTCHA fejlede
        $_SESSION['modal'] = 'error';
        error_log("reCAPTCHA validation failed.");
    }
}

// Tjek sessionen og vis modal
if (isset($_SESSION['modal'])) {
    if ($_SESSION['modal'] == 'success') {
        echo '<script type="text/javascript">
            window.onload = function() {
                const successModal = new bootstrap.Modal(document.getElementById("successModal"));
                successModal.show();
                setTimeout(function() {
                    successModal.hide();
                }, 5000);
            }
          </script>';
    } elseif ($_SESSION['modal'] == 'error') {
        echo '<script type="text/javascript">
            window.onload = function() {
                const errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
                errorModal.show();
                setTimeout(function() {
                    errorModal.hide();
                }, 5000);
            }
          </script>';
    }
    // Fjern modalstatus fra session efter visning
    unset($_SESSION['modal']);
}

// Afslut output-buffering og send alt output
ob_end_flush();
?>





<div class="container-fluid">
        <div class="row">
            <!-- Venstre kolonne med formen -->
            <div class="col-lg-7 col-md-12 d-flex justify-content-center align-items-center p-4"> <!-- Justering af bredde afhængig af skærmstørrelse -->
                <div class="w-100 mt-5" style="max-width: 600px;"> <!-- Begræns bredden af formen -->
                    <h2 class="mb-4 mt-8 display-6 text-white fw-bold">Lad os finde den <span style="color: #0a53be" class="fst-italic">bedste løsning for dig!</span></h2>
                    <p class="text-white fw-light tis mb-4">
                        Har du spørgsmål eller brug for hjælp? Kontakt os! Vi er her for at give dig den bedste service og besvare alle dine henvendelser om support, produkter, tjenester eller generelle forespørgsler.
                    </p>
                    <form method="post"> <!-- Action attribut tilføjet -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form__group"> <!-- Brug af dine egne klasser -->
                                    <input type="text" class="form__field" id="name" name="name" placeholder="Indtast dit navn" required>
                                    <label for="name" class="form__label">Navn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form__group"> <!-- Brug af dine egne klasser -->
                                    <input type="text" class="form__field" id="lastname" name="lastname" placeholder="Indtast dit efternavn" required>
                                    <label for="lastname" class="form__label">Efternavn</label>
                                </div>
                            </div>
                        </div>
                        <div class="form__group"> <!-- Brug af dine egne klasser -->
                            <input type="email" class="form__field" id="email" name="email" placeholder="Indtast din e-mail" required>
                            <label for="email" class="form__label">E-mail</label>
                        </div>
                        <div class="form__group"> <!-- Brug af dine egne klasser -->
                            <textarea class="form__field" id="message" name="message" rows="5" placeholder="Skriv din besked her" required></textarea>
                            <label for="message" class="form__label">Besked</label>
                        </div>

                        <div class="g-recaptcha mt-4" data-sitekey="6LfaxkEqAAAAAO3z_-XNbJH_M3hKLRxd1ApmlAcq"></div>

                        <button type="submit" class="btn-f mt-5 mb-5 border-1 bg-transparent d-inline-flex border-white fw-medium justify-content-center align-items-center text-center" style="padding: 0; background: none;">
                            <span class="small fw-bold">Send besked</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Højre kolonne med kortet -->
            <div class="col-lg-5 col-md-12 m-0 p-0">
                <div id="map" style="height: 100vh; width: 100%;"></div>
            </div>
        </div>
    </div>


    <!-- Modal for succesbesked -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Besked sendt</h5>
                    <button type="button" class="btn-close align-items-center d-flex justify-content-center" data-bs-dismiss="modal" aria-label="Close">✖</button>
                </div>
                <div class="modal-body">

                    Tak for din besked! Vi vender tilbage snarest.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for fejlbesked -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Fejl ved afsendelse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Beskeden kunne ikke sendes. Prøv venligst igen senere.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                </div>
            </div>
        </div>
    </div>



    <script src="js/map.js"></script>
    <?php include "includes/footer.php" ?>
