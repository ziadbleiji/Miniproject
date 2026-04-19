<?php require "includes/header.php"; ?>
<?php require "database/connection.php"; ?>

<main style="display:flex; gap:20px;">

<!-- SIDEBAR -->
<div style="width:250px;">

<form method="GET" action="/index.php">
<input type="hidden" name="url" value="ons-aanbod">

<div class="white-background">
    <p class="section-title">Zoek</p>
    <input type="search" name="search"
           value="<?= $_GET['search'] ?? '' ?>"
           placeholder="Zoek op merk..."
           style="width:100%;">
</div>

<div class="white-background" style="margin-top:15px;">
    <p class="section-title">Type</p>

    <?php foreach(["Sport","SUV","Supercar","Hatchback","EV"] as $t): ?>
        <label>
            <input type="checkbox" name="type[]" value="<?= $t ?>"
            <?= in_array($t, $_GET['type'] ?? []) ? 'checked' : '' ?>>
            <?= $t ?>
        </label><br>
    <?php endforeach; ?>
</div>

<div class="white-background" style="margin-top:15px;">
    <p class="section-title">Versnelling</p>

    <?php foreach(["Automaat","Schakel"] as $g): ?>
        <label>
            <input type="checkbox" name="gearbox[]" value="<?= $g ?>"
            <?= in_array($g, $_GET['gearbox'] ?? []) ? 'checked' : '' ?>>
            <?= $g ?>
        </label><br>
    <?php endforeach; ?>
</div>

<br>
<button class="button-primary">Filter</button>

</form>

</div>

<!-- AUTO GRID -->
<div style="flex:1;">

<div class="cars">

<?php
$query = "SELECT * FROM cars WHERE 1=1";

// 🔍 zoek op merk
if (!empty($_GET['search'])) {
    $s = mysqli_real_escape_string($conn, $_GET['search']);
    $query .= " AND brand LIKE '%$s%'";
}

// 🔧 type filter
if (!empty($_GET['type'])) {
    $types = array_map(fn($t) => "'" . mysqli_real_escape_string($conn,$t) . "'", $_GET['type']);
    $query .= " AND cartype IN (" . implode(",", $types) . ")";
}

// ⚙️ gearbox filter
if (!empty($_GET['gearbox'])) {
    $gear = array_map(fn($g) => "'" . mysqli_real_escape_string($conn,$g) . "'", $_GET['gearbox']);
    $query .= " AND gearbox IN (" . implode(",", $gear) . ")";
}

$result = mysqli_query($conn, $query);

if (!$result) {
    die("SQL fout: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    echo "<p>Geen auto's gevonden</p>";
}

while ($car = mysqli_fetch_assoc($result)):
?>

<div class="car-details">
    <div class="car-brand">
        <h3><?= $car['brand'] . " " . $car['model']; ?></h3>
        <div class="car-type"><?= $car['cartype']; ?></div>
    </div>

    <img src="assets/images/products/<?= $car['img']; ?>" alt="">

    <div class="car-specification">
        <span><img src="assets/images/icons/gas-station.svg"> <?= $car['gas_tank_volume']; ?></span>
        <span><img src="assets/images/icons/car.svg"> <?= $car['gearbox']; ?></span>
        <span><img src="assets/images/icons/profile-2user.svg"> <?= $car['seats']; ?></span>
    </div>

    <div class="rent-details">
        <span>
            <span class="font-weight-bold">€<?= $car['priceday']; ?></span> / dag
        </span>
        <a href="/index.php?url=car-detail&id=<?= $car['id']; ?>" class="button-primary">Bekijk</a>
    </div>
</div>

<?php endwhile; ?>

</div>

</div>

</main>

<?php require "includes/footer.php"; ?>
