<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="../assets/img/fav.png">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="../index.php" class="nav__logo">Shahed</a>
                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <section class="section">
                <h2 class="section__title">Login</h2>
                <span class="section__subtitle">Login to see messages.</span>
                <div class="contact__container container grid">  
                
                    <form action="login.php" method="post" class="grid">
                        <div class="contact__content">
                            <label for="contact__label">Username</label>
                            <input type="text" class="contact__input" name="username" required>
                        </div>
                        <div class="contact__content">
                        <label for="contact__label">Password</label>
                            <input type="password" class="contact__input" name="password" required>
                        </div>
                        <div>
                            <input type="submit" value="Login" class="button button-flex" style="border:none;">
                        </div>  
                    </form>
                    <div>
                    <p>
                        <?php
                        if(isset($_SESSION['error_message'])){
                            echo $_SESSION['error_message'];
                            unset($_SESSION['error_message']);
                        }
                        ?>
                    </p>
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
        
        <!--==================== SCROLL UP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>
        

        <!--==================== SWIPER JS ====================-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>