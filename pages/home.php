<?php require "includes/header.php"; ?>
<?php require "database/connection.php"; ?>

<main class="content">

    <!-- HERO -->
    <div class="advertorials">

        <div class="advertorial">
            <h2>Hét platform om een auto te huren</h2>
            <p>Snel en eenvoudig een auto huren. Natuurlijk voor een lage prijs.</p>

            <a href="index.php?url=ons-aanbod" class="button-primary">
                Huur nu een auto
            </a>

            <img src="/assets/images/products/Car (1).svg">
        </div>

        <div class="advertorial">
            <h2>Wij verhuren ook bedrijfswagens</h2>
            <p>Voor een vaste lage prijs met prettig voordelen.</p>

            <a href="#" class="button-primary">
                Huur een bedrijfswagen
            </a>

            <img src="/assets/images/products/Car (2).svg">
        </div>

    </div>

    <!-- AUTO LIJST -->
    <h3 class="section-title">Populaire auto's</h3>

    <div class="cars">

        <?php
        $cars = mysqli_query($conn, "SELECT * FROM cars LIMIT 4");

        while($car = mysqli_fetch_assoc($cars)):
        ?>

        <div class="car-details">

            <h3><?= $car['brand'] . " " . $car['model']; ?></h3>
            <span class="car-type"><?= $car['cartype']; ?></span>

            <img src="/assets/images/products/<?= $car['img']; ?>">

            <div class="car-specification">
                <span><?= $car['gas_tank_volume']; ?></span>
                <span><?= $car['gearbox']; ?></span>
                <span><?= $car['seats']; ?></span>
            </div>

            <div class="rent-details">
                <span><b>€<?= $car['priceday']; ?></b> / dag</span>

                <a href="index.php?url=car-detail&id=<?= $car['id']; ?>" class="button-primary">
                    Bekijk nu
                </a>
            </div>

        </div>

        <?php endwhile; ?>

    </div>

    <!-- 🔥 ENIGE TOEVOEGING: GECENTREERDE KNOP -->
    <div class="show-more">
        <a href="index.php?url=ons-aanbod" class="button-primary">
            Toon alle
        </a>
    </div>

</main>

<?php require "includes/footer.php"; ?>