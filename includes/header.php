<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Rydr</title>


    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

<header class="topbar">

   
    <div class="logo">
        <a href="index.php">Rydr.</a>
    </div>

    
    <form>
        <input type="search" placeholder="Zoek een auto...">
    </form>

    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?url=ons-aanbod">Ons aanbod</a></li>
            <li><a href="index.php?url=over-ons">Het team</a></li>
            <li><a href="index.php?url=account">Mijn reserveringen</a></li>
        </ul>
    </nav>

    
    <div class="menu">

        <?php if(isset($_SESSION['id'])): ?>

            <!-- INGELOGD -->
            <div class="account">
                <img src="assets/images/profil.png" alt="account">

                <div class="account-dropdown">
                    <ul>
                        <li><a href="index.php?url=account">Mijn account</a></li>
                        <li><a href="logout.php">Uitloggen</a></li>
                    </ul>
                </div>
            </div>

        <?php else: ?>

            <!-- UITGELOGD -->
            <a href="index.php?url=login-form" class="button-primary">
                Start nu met huren
            </a>

        <?php endif; ?>

    </div>

</header>