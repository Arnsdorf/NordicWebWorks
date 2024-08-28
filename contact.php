<?php include "includes/header.php" ?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- 6/12 column width for half the screen -->
            <h2 class="mb-4 display-6 text-white fw-bold">Kontakt os</h2>
            <p class="text-white fw-light mb-4">
                Har du spørgsmål eller brug for hjælp? Vi vil meget gerne høre fra dig!
                Vi sætter en ære i at give dig den bedst mulige service, og vi er her for
                at besvare dine spørgsmål, uanset om du har brug for support, ønsker at høre
                mere om vores produkter og tjenester, eller har generelle forespørgsler.
            </p>
            <form>
                <div class="form__group">
                    <input type="text" class="form__field" id="name" placeholder="Indtast dit navn" required>
                    <label for="name" class="form__label">Navn</label>
                </div>

                <div class="form__group">
                    <input type="text" class="form__field" id="lastname" placeholder="Indtast dit efternavn" required>
                    <label for="lastname" class="form__label">Efternavn</label>
                </div>

                <div class="form__group">
                    <input type="email" class="form__field" id="email" placeholder="Indtast din e-mail" required>
                    <label for="email" class="form__label">E-mail</label>
                </div>

                <div class="form__group">
                    <textarea class="form__field" id="message" rows="5" placeholder="Skriv din besked her" required></textarea>
                    <label for="message" class="form__label">Besked</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send besked</button>
            </form>

        </div>
        <div class="col-md-6"> <!-- 6/12 column width for half the screen -->

        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>
