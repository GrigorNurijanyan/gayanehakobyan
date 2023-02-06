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
                <img src="./assets/current-project-background.png" alt="Current Project"/>
            </div>

            <div class="home-page-books-info-wrapper pages-subinfo-wrapper">
                <div class="container">
                    <div class="books-slider">
                        <a href="./current_project_a_restoration.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>"A RESTORATION”</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/a-restoration-background.png" alt="info 1"/>
                                </div>
                            </div>
                        </a>
                        <a href="./current_project_dev_page.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>DEVELOPMENT CENTER  PRESENTS</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/development-center-background.png" alt="info 2"/>
                                </div>
                            </div>
                        </a>
                        <a href="./current_project_support_disabilities_people.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>‘’SUPPORT FOR PEOPLE WITH LIMITED ABILITY’’ PROGRAM</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/help-disabilities-people-background.png" alt="info 3"/>
                                </div>
                            </div>
                        </a>
                        <a href="./current_project_a_prayer_school.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>PRAYER SERVICE</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/a-prayer-service-background.png" alt="info 3"/>
                                </div>
                            </div>
                        </a>
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