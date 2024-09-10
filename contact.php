    <?php include "includes/header.php" ?>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Modtagerens e-mailadresse (din e-mailadresse)
        $to = "sigurddam@nordicwebworks.dk";

        // PHPMailer-opsætning
        $mail = new PHPMailer(true);

        try {
            // SMTP-server konfiguration
            $mail->isSMTP();
            $mail->Host = 'smtp.simply.com';  // Din udgående mailserver
            $mail->SMTPAuth = true;
            $mail->Username = 'sigurddam@nordicwebworks.dk';  // Din e-mailadresse (brugernavn)
            $mail->Password = 'csk34zrc';  // Din adgangskode til e-mailadressen
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Brug STARTTLS-kryptering
            $mail->Port = 587;  // Udgående serverens port

            // Afsender og modtager
            $mail->setFrom('no-reply@nordicwebworks.dk', 'Kontaktformular');
            $mail->addAddress($to);  // Modtageren af beskeden (din e-mailadresse)

            // E-mail indhold
            $mail->isHTML(true);
            $mail->Subject = 'Ny besked fra NWW Page';
            $mail->Body    = "Navn: $name $lastname<br>E-mail: $email<br><br>Besked:<br>$message";

            // Send beskeden
            $mail->send();
            echo 'Tak for din besked! Vi vender tilbage snarest.';
        } catch (Exception $e) {
            echo "Beskeden kunne ikke sendes. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    ?>


    <div class="container-fluid">
        <div class="row">
            <!-- Venstre kolonne med formen -->
            <div class="col-lg-7 col-md-12 d-flex justify-content-center align-items-center p-4"> <!-- Justering af bredde afhængig af skærmstørrelse -->
                <div class="w-100 mt-5" style="max-width: 600px;"> <!-- Begræns bredden af formen -->
                    <h2 class="mb-4 display-6 text-white fw-bold">Lad os finde den <span style="color: #DA009D" class="fst-italic">bedste løsning for dig!</span></h2>
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
                        <button type="submit" class="btn-f mt-5 mb-5 border-1 bg-transparent d-inline-flex border-white fw-medium justify-content-center align-items-center text-center" style="padding: 0; background: none;">
                            <span class="small">Læs Mere</span>
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


    <script src="js/map.js"></script>
    <?php include "includes/footer.php" ?>
