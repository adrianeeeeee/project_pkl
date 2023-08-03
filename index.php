<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomikLovers | Website Penyedia Komik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="scss/index.css" />

    <link rel="shorcut icon" href="img/favicon.ico">

</head>

<body>


    <?php

    include 'navbar.php';

    ?>


    <div class="row custom-section">
        <div class="col">
            <h2>Gamau ribet nyari situs web baca komik?</h2>
            <h3>Disini adalah Website penyedia Komik gratis</h3>
            <p>
                Komiklovers merupakan web penyedia baca komik gratis, siap digunakan
                kapanpun dan dimanapun.
            </p>
            <a href="#bawah">Selengkapnya</a>
        </div>
    </div>
    <br /><br /><br /><br />


    <!-- Start Beranda -->

    <section id="bawah" class="main-container">

        <br>
        <br>
        <br>


        <!-- <div class="tab-nav-bar">
            <div class="tab-navigation">
             
                <ul class="tab-menu">
                    <li class="tab-btn active">Komiku</li>
                    <li class="tab-btn">Softkomik</li>
                    <li class="tab-btn">Webtoon</li>
                    <li class="tab-btn">Mangafoxfull</li>
                    <li class="tab-btn">Mirrorkomik</li>
                    <li class="tab-btn">Komikcast</li>
                </ul>
            </div>
        </div> -->
        <!-- tab content  -->

        <!-- Slideshow container -->
        <div class="slideshow-container">


            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 10</div>
                <img src="img/komiku.png" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 10</div>
                <img src="img/softkomik.png" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 10</div>
                <img src="img/webtoon.png" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 10</div>
                <img src="img/mangafoxfull.png" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 10</div>
                <img src="img/mirrorkomik.png" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 10</div>
                <img src="img/komikcast.png" style="width:100%">
                <div class="text"></div>
            </div>


            <div class="mySlides fade">
                <div class="numbertext">7 / 10</div>
                <img src="img/kissmanga.png" style="width:100%">
                <div class="text"></div>
            </div>


            <div class="mySlides fade">
                <div class="numbertext">8 / 10</div>
                <img src="img/mangaku.png" style="width:100%">
                <div class="text"></div>
            </div>


            <div class="mySlides fade">
                <div class="numbertext">9 / 10</div>
                <img src="img/komikstation.png" style="width:100%">
                <div class="text"></div>
            </div>


            <div class="mySlides fade">
                <div class="numbertext">10 / 10</div>
                <img src="img/mangaid.png" style="width:100%">
                <div class="text"></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!-- End tab content -->

    <footer>
        <div class="footer-content">
            <img class="img" src="img/logo-color-removebg-preview.png" alt="">
            <h3>Komiklovers</h3>
            <p></p>
            <ul class="social">
                <!-- <li><a href="https://www.instagram.com/hv__adrian6/"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/adrian-farrel-aziz-yatyoga-31ab9826a/"><i class="bi bi-linkedin"></i></a></li> -->
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 Komiklovers. designed by <span>KLdev</span></p>
        </div>
    </footer>

    <script src="main.js"></script>



</body>

</html>