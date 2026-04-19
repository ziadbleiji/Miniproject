<?php 
require "includes/header.php"; 
require "database/connection.php";

// check login
if (!isset($_SESSION['id'])) {
    header("Location: index.php?url=login-form");
    exit;
}

$user_id = $_SESSION['id'];

$query = mysqli_query($conn, "
    SELECT r.*, c.brand, c.model, c.img 
    FROM reservations r
    JOIN cars c ON r.car_id = c.id
    WHERE r.user_id = '$user_id'
");
?>

<main class="content">

    <div class="white-background">

        <h2>Mijn reserveringen</h2>

        <?php if(mysqli_num_rows($query) == 0): ?>

            <p>Je hebt nog geen reserveringen.</p>

        <?php else: ?>

            <div class="cars">

                <?php while($res = mysqli_fetch_assoc($query)): ?>

                    <div class="car-details">

                        <h3><?= $res['brand'] . " " . $res['model']; ?></h3>

                        <img src="/assets/images/products/<?= $res['img']; ?>">

                        <p>Van: <?= $res['start_date']; ?></p>
                        <p>Tot: <?= $res['end_date']; ?></p>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>

</main>

<?php require "includes/footer.php"; ?>