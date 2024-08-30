<?php include "includes/header.php" ?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Indsaml data fra formularen
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Din e-mailadresse, hvor du vil modtage beskeden
    $to = "sigurddam@nordicwebworks.dk"; // Udskift med din e-mailadresse
    $subject = "Ny besked fra kontaktsiden";

    // Opbyg beskeden
    $body = "Navn: $name $lastname\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Besked:\n$message\n";

    // Sæt e-mail-header
    $headers = "From: $email";
    $headers = "From: no-reply@nordicwebworks.dk\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send e-mailen
    if (mail($to, $subject, $body, $headers)) {
        echo "Tak for din besked! Vi vil vende tilbage til dig snarest.";
    } else {
        echo "Der opstod en fejl, prøv venligst igen.";
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
                <form method="post">
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


<?php include "includes/footer.php" ?>
