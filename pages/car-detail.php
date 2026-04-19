<?php 
require "includes/header.php"; 
require "database/connection.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM cars WHERE id = '$id'");
$car = mysqli_fetch_assoc($query);
?>

<main class="content car-detail">

    <div class="grid">

        <!-- LINKS -->
        <div class="row white-background">

            <h2><?= $car['brand'] . " " . $car['model']; ?></h2>
            <p class="accent-color"><?= $car['cartype']; ?></p>

            <img src="/assets/images/products/<?= $car['img']; ?>" style="max-width:100%;">

        </div>

        <!-- RECHTS -->
        <div class="row white-background">

            <h3>Specificaties</h3>

            <p>Brandstof: <?= $car['gas_tank_volume']; ?></p>
            <p>Versnelling: <?= $car['gearbox']; ?></p>
            <p>Zitplaatsen: <?= $car['seats']; ?></p>

            <h2>€<?= $car['priceday']; ?> / dag</h2>

            <!-- 🔥 HUUR KNOP -->
            <a href="index.php?url=rent&id=<?= $car['id']; ?>" class="button-primary">
                Huur nu
            </a>

        </div>

    </div>

</main>

<?php require "includes/footer.php"; ?>