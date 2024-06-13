<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/rooms.css">
</head>

<body>
    <section>
        <div class="all_bg">
            <?php include 'navbar.php' ?>
            <h1>Rooms</h1>
        </div>
    </section>
    <section>
        <div class="room_slide">
<div class="click">
    <p>Click to get slideshow of the rooms</p>
</div> 
            <div class="swiper mySwiper3">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="./images/1.jpeg" data-fancybox="gallery">
                            <img src="./images/1.jpeg" alt="">
                        </a>
                    </div>
                </div>



                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="details">
            <div class="dash">
                <h1>Rooms</h1>
            </div>
            <div class="details_two">
                <div class="ones">
                    <p>
                        Our two spacious luxury rooms are 33m2 in size each, and offer comfortable queen size beds. Both elegant and modern, the rooms provide guests with en suite bathrooms, tea/coffee making facilities, a mini bar, hair dryer, satellite television and air conditioning.
                    </p>
                    <p>
                        At Durbar Court Hotel we believe you should have it your way and embrace your individuality. Choose the accommodation and optional services you prefer; based on your schedule, lifestyle and budget. Whether it’s an elegantly designed hotel room, spacious hotel suite or contemporary furnished apartment, simply pick what you need and feel perfectly at home.
                    </p>
                </div>
                <div class="ones">
                    <h1>Our room facilities include:</h1>
                    <br>
                    <li>Direct internet access (wi-fi inclusive)</li>
                    <li>Direct dial telephone</li>
                    <li>International Direct Dialling - IDD</li>
                    <li>Multi-Channel Television</li>
                    <li>Mini-Bar</li>
                    <li>Tea and Coffee Bar</li>

                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script>
        AOS.init();
    </script>
    <script src="./js/swiper.js"></script>
    <script src="./js/animation.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>