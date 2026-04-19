<?php require "includes/header.php"; ?>

<main>
    <form action="/index.php?url=register" method="post" class="account-form">
        <h2>Account maken</h2>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="message"><?= $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Wachtwoord</label>
        <input type="password" name="password" required>

        <label>Herhaal wachtwoord</label>
        <input type="password" name="confirm-password" required>

        <input type="submit" value="Registreren" class="button-primary">
    </form>
</main>

<?php require "includes/footer.php"; ?>
