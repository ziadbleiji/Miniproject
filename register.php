<?php require "includes/header.php"; ?>

<main class="content">

    <div class="white-background" style="max-width:500px; margin:0 auto;">

        <h2>Account aanmaken</h2>

        <form method="POST">

            <label>Naam</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Wachtwoord</label>
            <input type="password" name="password" required>

            <button class="button-primary" type="submit">
                Registreren
            </button>

        </form>

    </div>

</main>

<?php require "includes/footer.php"; ?>