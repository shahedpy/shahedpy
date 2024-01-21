<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/fav.png">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
                
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="../assets/css/styles.css">

        <title>Shahed</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Shahed</a>
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link active-link">
                                <i class="uil uil-signout nav__icon"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">

            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <h2 class="section__title">Messages</h2>
                <span class="section__subtitle">Messages sent by visitor</span>
                <div class="home__container container grid">
                    
                        <table class="messages">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Project</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                            
                                <?php
                                
                                include 'include.php'; 
                                
                                $SQL = "SELECT * FROM `messages` ORDER BY `id` DESC";
                                
                                $result = mysqli_query($mysqli,$SQL);
                                
                                if($result->num_rows > 0){
                                    
                                    while($row = $result->fetch_assoc()){
                                        print "<tr>";
                                        print "<td>".$row['name']."</td>";
                                        print "<td>".$row['email']."</td>";
                                        print "<td>".$row['project']."</td>";
                                        print "<td>".$row['message']."</td>";
                                        print "<td>".date_format(date_create($row['created_at']),"d/m/Y")."</td>";
                                        print "</tr>";
                                    }
                                }
                                ?>
                        </table>
                </div>
            </section>

            

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

        <!--==================== MAIN JS ====================-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
