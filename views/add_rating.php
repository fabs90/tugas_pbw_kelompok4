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
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="../index.html" class="logo">MANTRA COFFEE
            <img src="../pbw_assets/Logo_Mantra.PNG" width="50" alt="logo" />
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#book">book</a>
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
                    Your review will shown in landing page.
                </p>
                <form action="">
                    <input type="text" placeholder="Name" class="box" />
                    <input type="email" placeholder="Email" class="box" />
                    <textarea name="" placeholder="Message (Don't use SARA)" class="box" id="" cols="30"
                        rows="10"></textarea>
                    <span class="fileUpload">Profile Image (optional)</span>
                    <input type="file" class="box" name="imageFileUpload" id="imageFileUpload" />
                    <input type="submit" value="send review" class="btn" />
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i> home</a>
                <a href="#about"><i class="fas fa-arrow-right"></i> about</a>
                <a href="#menu"><i class="fas fa-arrow-right"></i> menu</a>
                <a href="#review"><i class="fas fa-arrow-right"></i> review</a>
                <a href="#book"><i class="fas fa-arrow-right"></i> book</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +021-345-6789</a>
                <a href="#"><i class="fas fa-phone"></i> +021-122-4455</a>
                <a href="#"><i class="fas fa-envelope"></i> manftra.coffee@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i> Indonesia, Bekasi</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">
            created by <span>kelompok 5</span> | all rights reserved
        </div>
    </section>

    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link  -->
    <script src="../js/script.js"></script>
</body>

</html>
