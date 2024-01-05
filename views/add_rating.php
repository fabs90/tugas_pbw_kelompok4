<?php
require '../function.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../pbw_assets/Logo_Mantra.PNG" type="image/x-icon" />
    <title>MANTRA COFFEE</title>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="../css/style.css" />

    <link rel="stylesheet" href="../css/alert.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="index.php" class="logo">MANTRA KOPI
            <img src="../pbw_assets/Logo_Mantra.PNG" height="50" alt="logo">
        </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">menu</a>
            <a href="index.php">review</a>
            <a href="index.php">book</a>
        </nav>

        <a href="#" class="btn">book a table</a>
    </header>


    <!-- ABOUT -->
    <section class="about aboutRating bookRating">
        <h1 class="heading">Tell us <span>why choose us</span></h1>
        <div class="row">
            <div class="content">
                <h3 class="title">write your review about us!</h3>
                <p style="margin-bottom: 20px">
                    Your review will be shown on the landing page.
                </p>
                <form action="" method="post" enctype="multipart/form-data">
                    <?php if (!empty($success)): ?>
                    <ul>
                        <?php foreach ($success as $item): ?>
                        <li><?=$item?></li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <?php if (!empty($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li><?=$error?></li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <input type="text" placeholder="Name (min 3)" name="name" class="box" required />
                    <input type="email" placeholder="Email" class="box" name="email" required />
                    <div class="stars_div">
                        <span for="star" class="stars_dropdown fileUpload">Choose Stars:</span>
                        <select name="star_rating" id="star" required>
                            <option value="0">----</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <textarea name="message" placeholder="Message" class="box" id="" cols="30" rows="10"
                        required></textarea>
                    <span class="fileUpload">Profile Image (optional) & max sixe 8mb </span>
                    <input type="file" class="box" name="image" id="imageFileUpload" required />
                    <input type="submit" value="send review" class="btn" name="ratingButton">
                </form>

            </div>
        </div>
    </section>

    <?php
include './layouts/footer.php';
?>