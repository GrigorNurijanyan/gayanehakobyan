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
            <div class="home-page-slider-container">
                <img src="./assets/sliderimg.png" alt="sliderimg"/>
            </div>
            <div class="home-page-books-info-wrapper">
                <div class="container">
                    <div class="books-slider">
                        <a href="./goandseefirstpage.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">01</div>
                                    <span>Go and See...</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/info1.png" alt="info 1"/>
                                    <p>Interviews, seminars and sermons by Gayane Hakobyan based on the Bible</p>
                                </div>
                            </div>
                        </a>
                        <a href="./books_and_audiobooks.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">02</div>
                                    <span>Books and Audiobooks</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/info2.png" alt="info 2"/>
                                    <p>Books by Gayane Hakobyan in text and audio formats</p>
                                </div>
                            </div>
                        </a>
                        <a href="./who_is_god_what_is_faith.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">03</div>
                                    <span>Who is God, What is Faith</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/info3.png" alt="info 3"/>
                                    <p>Text and audio versions of messages by Gayane Hakobyan that make fundamental changes in people’s lives</p>
                                </div>
                            </div>
                        </a>
                        <a href="./current_project_dev_page.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">04</div>
                                    <span>Development Center</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/development-center-background.png" alt="info 4"/>
                                    <p>Text and audio versions of messages by Gayane Hakobyan that make fundamental changes in people’s lives</p>
                                </div>
                            </div>
                        </a>
                        <a href="./testimonials.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">05</div>
                                    <span>Testimonials</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/info2.png" alt="info 2"/>
                                    <p>Books by Gayane Hakobyan in text and audio formats</p>
                                </div>
                            </div>
                        </a>
                        <a href="./change_your_life.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">06</div>
                                    <span>Change Your Life</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/info3.png" alt="info 3"/>
                                    <p>Text and audio versions of messages by Gayane Hakobyan that make fundamental changes in people’s lives</p>
                                </div>
                            </div>
                        </a>
                        <a href="./sermons.php" class="book-item-padding">
                            <div class="book-flex">
                                <div class="book-info">
                                    <div class="book-circle">07</div>
                                    <span>Sermons</span>
                                </div>
                                <div class="book-item">
                                    <img src="./assets/development-center-background.png" alt="info 4"/>
                                    <p>Text and audio versions of messages by Gayane Hakobyan that make fundamental changes in people’s lives</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-book-image">
            <img src="./assets/fearbook.png" alt="Book 1"/>
            </div>
        </div>
        <?php
            require_once("footer.php");
        ?>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.home-page-slider-container').slick({
            dots: false,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true,
            speed: 1000,
            arrows: false,
        });
        $('.books-slider').slick({
            infinite: false,
            dots: false,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<img style="transform: rotate(180deg);" src="./assets/arrowRight.png" alt="Arrow Left"/>',
            nextArrow: '<img src="./assets/arrowRight.png" alt="Arrow Right"/>',
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
    </script>
</body>

</html>