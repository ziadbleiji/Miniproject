<?php 
require "includes/header.php"; 
require "database/connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['id'] = $user['id'];

        header("Location: index.php");
        exit;

    } else {
        echo "<div class='message'>Login mislukt</div>";
    }
}
?>

<main class="content">

    <div class="white-background" style="max-width:500px; margin:0 auto;">

        <h2>Inloggen</h2>

        <form method="POST">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Wachtwoord</label>
            <input type="password" name="password" required>

            <button class="button-primary" type="submit">
                Inloggen
            </button>

        </form>

    </div>

</main>

<?php require "includes/footer.php"; ?>