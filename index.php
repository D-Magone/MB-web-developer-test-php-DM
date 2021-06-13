<?php
    require_once ('newuser.php');
    require_once ('formaction.php');

    $action = new Form();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./css/img/pineapple_logo_thmb.png">
    <title>pineapple.</title>
</head>
<body>
    <!-- WHOLE WEBPAGE -->
    <div class="container">
        <!-- LEFT CONTAINER -->
        <div class="container-left"> 
                <!-- HEADER -->
            <header>
                <nav>
                    <div class="logo">
                        <img src="./css/img/pineapple_logo.png" class="logo-img">
                        <img src="./css/img/pineapple_text.png" class="logo-text">
                    </div>
                    <div class="nav-links">
                        <a href="#">About</a>
                        <a href="#">How it works</a>
                        <a href="#">Contact</a>
                    </div> 
                </nav>
            </header>
            <!-- END HEADER -->
            <!-- MAIN -->
            <main class="subscribe-container">
                <article>
                    <h1>
                        Subscribe to newsletter
                    </h1>
                    <p>
                        Subscribe to our newsletter and get 10% discount on pineapple glasses.
                    </p>
                </article>
                <!-- FORM -->
                <form action="" method="POST">
                    <div class="input-container">
                        <div class="input-line"></div>
                        <input name="email" id="inputField" class="input-email" type="text" placeholder="Type your email address here…">
                        <button name="submit" id="subscribeBtn" class="subscribe-btn" type="submit" value="submit">
                            <img class="arrow-icon" src="./css/icons/ic_arrow.svg">
                            <img class="arrow-icon arrow-icon-focus" src="./css/icons/ic_arrow_blue.svg">
                        </button>
                        <p id="errorMsg" class="error-msg"><?php $action->FormAction(); ?></p>
                    </div>
                    <input id="formCheckbox" class="form-checkbox" type="checkbox" name="checkbox" value="check">
                    <label for="formCheckbox" class="checkbox-label"><img class="checkmark" src="./css/icons/ic_checkmark.svg">I agree to <a href="#">terms of service</a></label>
                </form>
                <!-- END FORM -->
            </main>
            <!-- END MAIN -->
            <!-- FOOTER -->
            <footer>
                <div class="footer-line"></div>
                <a href="#">
                    <div class="social-media-btn fb">
                        <img class="soc-media-icon facebook-icon" src="./css/icons/ic_facebook.svg">
                        <img class="soc-media-icon facebook-icon fb-hover" src="./css/icons/ic_facebook_white.svg">
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-btn ig">
                        <img class="soc-media-icon instagram-icon" src="./css/icons/ic_instagram.svg">
                        <img class="soc-media-icon instagram-icon ig-hover" src="./css/icons/ic_instagram_white.svg">
                
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-btn tw">
                        <img class="soc-media-icon twitter-icon" src="./css/icons/ic_twitter.svg">
                        <img class="soc-media-icon twitter-icon tw-hover" src="./css/icons/ic_twitter_white.svg">
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-btn yt">
                        <img class="soc-media-icon youtube-icon" src="./css/icons/ic_youtube.svg">
                        <img class="soc-media-icon youtube-icon yt-hover" src="./css/icons/ic_youtube_white.svg">
                    </div>
                </a>
            </footer>
            <!-- END FOOTER -->
        </div>
        <!-- END LEFT CONTAINER -->
        <!-- BACKGROUND PICTURE CONTAINER -->
        <div class="picture-container"></div>
        <!-- END BACKGROUND PICTURE CONTAINER -->
    </div>
    <!-- END WHOLE WEBPAGE -->
    <script src="./js/app.js"></script>
</body>
</html>