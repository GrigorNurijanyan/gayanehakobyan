<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gayane Hakobyan</title>

    <!-- Anglereni u hayereni hamar -->
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <!-- Rusereni hamar -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/ru-styles.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./css/variables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="./js/scripts.js"></script>

    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
    <link rel="icon" sizes="192x192" href="./assets/favicons/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="./assets/favicons/android-chrome-512x512.png">
    <link rel="apple-touch-icon" sizes="16x16" href="./assets/favicons/apple-touch-icon.png">
    <link rel="manifest" href="./assets/favicons/site.webmanifest">
</head>

<body>

    <div class="wrapper">
        <?php
            require_once("header.php");
        ?>

        <div class="body-content-wrapper">
            <div class="blue-background">
                <div class="body-slider-wrapper">
                    <img src="./assets/who-is-god-what-is-faith-background.png" alt="Who is God, What is Faith"/>
                </div>
    
                <div class="home-page-books-info-wrapper pages-subinfo-wrapper">
                    <div class="container">
                    <div class="dev-page-items-wrapper">
                        <a href="./other_recomendations_1.php" class="book-item sermons-item">
                            <img src="./assets/who_is_1.png" alt="Image 1"/>
                            <img class="camera" src="./assets/white-camera.png" alt="Image 1"/>
                            <p>In the 1st Century AD, Paul the Apostle wrote to Timothy, “Exercise yourself toward godliness” </p>
                        </a>
                        <a href="./other_recomendations_2.php" class="book-item sermons-item">
                            <img src="./assets/who_is_2.png" alt="Image 2"/>
                            <img class="camera" src="./assets/white-camera.png" alt="Image 1"/>
                            <p>Every day I read “Sparkling Gems from the Greek” Devotional by Rick Renner.</p>
                        </a>
                        <a href="./other_recomendations_3.php" class="book-item sermons-item">
                            <img src="./assets/who_is_3.png" alt="Current Project 3"/>
                            <img class="camera" src="./assets/white-camera.png" alt="Image 1"/>
                            <p>Have you ever thought about the heart and faith of Abraham, when he prayed for the wife and female servants of Abimelech,</p>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            require_once("footer.php");
        ?>
    </div>

</body>

</html>