<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="assets/img/fav.png">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Shahed</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">Shahed</a>
                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">

            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        
                        <div class="home__data">
                            <p class="home__description">
                            <?php
                                session_start();
                                if(isset($_SESSION['msg']))
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                                ?>
                            </p>
                            <a href="index.php" class="button button--flex">
                                Go To Home <i class="uil uil-estate button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </section>            
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Shahed</h1>
                        <span class="footer__subtitle">Web &amp; Android App Developer</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contactme</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.facebook.com/shahedmohammadhridoy" target="_blank" class="footer__social">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        
                        <a href="https://www.instagram.com/shahedmohammadhridoy" target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>
                        
                        <a href="https://twitter.com/shahedmhridoy" target="_blank" class="footer__social">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">
                    &copy; Shahed. All right reserved
                </p>
            </div>  
        </footer>
    </body>
</html>