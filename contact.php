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
          <div class="contact-page-wrapper">
            <div class="container">
                <div class="contact-page-container">
                    <p>Contact us, write us the line below</p>
                    <form action="">
                        <div class="form-group">
                            <label class="required">Your Name</label>
                            <input class="form-input" type="text">
                        </div>
                        <div class="form-group">
                            <label class="required">Your Email</label>
                            <input class="form-input" type="text">
                        </div>
                        <div class="form-group">
                            <label>Theme</label>
                            <input class="form-input" type="text">
                        </div>
                        <div class="form-group">
                            <label>Your Letter</label>
                            <textarea rows="10" cols="50" class="form-textarea" type="text"></textarea>
                        </div>
                        <button class="send" type="submity">Send</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <?php
            require_once("footer.php");
        ?>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>