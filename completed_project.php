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
                <img src="./assets/completedprojectbackground.png" alt="Completed Project"/>
            </div>

            <div class="home-page-books-info-wrapper pages-subinfo-wrapper">
                <div class="container">
                    <div class="books-slider">
                        <a href="./completed_project_mobile_dining_room.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>Mobile Dining Room</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/mobile-dinig-room-background.png" alt="info 1"/>
                                </div>
                            </div>
                        </a>
                        <a href="./completed_project_bible_viewpoint.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>THE BIBLE’S VIEWPOINT</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/bible-viewpoint-background-completed-project.png" alt="info 2"/>
                                </div>
                            </div>
                        </a>
                        <a href="./completed_project_help_border_village.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>HELP FOR BORDER VILLAGES</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/help-border-villiages-background.png" alt="info 3"/>
                                </div>
                            </div>
                        </a>
                        <a href="./completed_project_older_garden.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>OLDER GARDEN: HELP FOR BES PATIENTS AND SINGLE ELDERLY</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/older-garden-background.png" alt="info 3"/>
                                </div>
                            </div>
                        </a>
                        <a href="./completed_project_serpents_seed_and_wild.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-line"></div>
                                    <span>THE SERPENT”S SEED AND THE WILD BEAST</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/serpents-seed-and-wild-background.png" alt="info 3"/>
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