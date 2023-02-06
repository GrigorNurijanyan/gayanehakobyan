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
            <div class="body-slider-wrapper">
                <img src="./assets/audbook-background.png" alt="Audio book Image"/>
            </div>
            <div class="books-and-audiobooks-page-wrapper">
                <div class="container">
                    <div class="book-item-wrapper">
                        <div class="book-page-item">
                            <div class="book-item-title">Book</div>
                            <img src="./assets/audbook1.png" alt="Book Image"/>
                        </div>
                        <div class="book-description-wrapper">
                            <h2>Fear</h2>
                            <h5>Preface</h5>
                            <p>When I decided to write about fear, I considered necessary to find out how today’s medicine describes this phenomenon. Having spoken to a number of medical doctors and psychologists as well as read studies on the subject of fear, I concluded that medical science and psychology, though  undoubtedly necessary, useful to the humanity, and respected by many  of us, could not give a final definition of fear, explain its origin or conditions of development.</p>
                        </div>
                    </div>
                    <div class="book-item-wrapper">
                        <div class="book-page-item">
                            <div class="book-item-title">Audibook</div>
                            <img src="./assets/audbook4.png" alt="Book Image"/>
                        </div>
                        <div class="book-description-wrapper">
                            <div class="audiobook-play-wrapper">
                                <img src="./assets/play.png" alt="Play Image"/>
                            </div>
                            <a href="./assets/download.png" download>
                                <img src="./assets/download.png" alt="Download Image"/>
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