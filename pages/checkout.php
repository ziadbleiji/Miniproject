<?php require "includes/header.php"; ?>
<?php require "database/connection.php"; ?>

<?php
$car_id = $_GET['id'] ?? 0;
$result = mysqli_query($conn, "SELECT * FROM cars WHERE id = $car_id");
$car = mysqli_fetch_assoc($result);
?>

<main class="content">

<div class="white-background">

    <h2>Betalen</h2>

    <form action="index.php?url=rent-handler" method="POST">

        <input type="hidden" name="car_id" value="<?= $car['id']; ?>">

        <label>Naam</label>
        <input type="text" name="name" required>

        <label>Start datum</label>
        <input type="date" name="start_date" required>

        <label>Eind datum</label>
        <input type="date" name="end_date" required>

        <br><br>

        <button type="submit" class="button-primary">
            Betaal & huur
        </button>

    </form>

</div>

</main>

<?php require "includes/footer.php"; ?>