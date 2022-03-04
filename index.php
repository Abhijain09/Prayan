<!DOCTYPE html>
<html lang="en">

<head>
    <meta chars-t="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<header>
    <nav class="navbar">
        <div class="navbar__top">
            <div class="navbar__brand">
                <a href="./index.php">
                    <img src="./assets/logo.png" alt="logo" class="brand__logo">
                </a>
            </div>
            <div class="navbar__nav__items">
                <div class="nav__items">
                    <h5 id="items__home"> <a href="./index.php">HOME</a></h5>
                    <h5 id="items__about"> <a href="./about.html">ABOUT US</a></h5>
                    <h5 id="items__offers"> <a href="./header/offer.html">OFFERS</a></h5>
                    <h5 id="items__contact"><a href="./header/contact.html">Contact</a></h5>
                </div>
            </div>
            <div class="navbar__account" id="navbar_acc">
                <div class="navbar__register">
                    <h5 id="nav__login"> <a href="./login.html"> LOGIN</a></h5>
                    <h4>|</h4>
                    <h5 id="nav__register"> <a href="./signup.php">REGISTER</a></h5>
                </div>
            </div>
        </div>
        <section class="header__mid ">
            <div class="header__mid__content ">
                <h1>
                    DISCOVER
                </h1>
                <h2>
                    the world
                </h2>
            </div>
        </section>
        <section class="header__explore__button ">
            <div class="explore__button__container ">
                <Button class="button__explore ">
                    GET MORE...
                </Button>
            </div>
        </section>
    </nav>
</header>

<body>
    <?php
    session_start();
    if (isset($_SESSION['email'])) {
    ?>
        <script>
            let elements = document.getElementsByClassName("navbar__register");
            while (elements.length > 0) elements[0].remove();
            const elem = document.getElementById('navbar_acc');
            const div = document.createElement('div');
            div.className = "navbar__register";
            const h5 = document.createElement('h5');
            const a = document.createElement('a');
            h5.id = "nav__profile";
            a.setAttribute("href", "./profile.php");
            a.text = 'PROFILE';
            h5.appendChild(a);
            div.append(h5);
            elem.append(div);
        </script>

    <?php
    }
    ?>
    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 ">Explore our world</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/paris1.png " alt="parisimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Paris</b></h4>
                        <p>
                            France

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-22,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/landon1.png " alt="londonimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>London</b></h4>
                        <p>
                            United Kingdom

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-26,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/india.png " alt="indiaimage " class="hotel__image " style="height: 350px; " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Himachal </b></h4>
                        <p>
                            India

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-12,000</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="food__list__container__button ">

            <button class="food__list__container__button__work "><a href="./trip.php">View &#8594 </a></button>

        </div>
    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 ">Top Hotels</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/dream_hotel.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Vertex</b></h4>
                        <p>
                            Panaji
                            <span style="color: red ">Goa</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-4,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/udipur_hotel.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Udipur Palace</b></h4>
                        <p>
                            Udipur
                            <span style="color: red ">Rajasthan</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-5,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/taj_hotel.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Taj Hotel</b></h4>
                        <p>
                            Mumbai
                            <span style="color: red "> Maharashtra</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-10,000</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="food__list__container__button ">
            <button class="food__list__container__button__work "><a href="./hotel.php">View &#8594</a></button>

        </div>
    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 ">Explore Restaurant</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/rest1.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Indian Eagle</b></h4>
                        <p>
                            Chennai
                            <span style="color: red ">Tamil Nadu</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-1,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/rest2.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Swadesi Zaika</b></h4>
                        <p>
                            Noida
                            <span style="color: red ">UtterPradesh</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-1,500</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/rest3.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Indian Corner</b></h4>
                        <p>
                            Mumbai
                            <span style="color: red ">Maharashtra</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-800</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="food__list__container__button ">
            <button class="food__list__container__button__work "><a href="./restaurant.php">View &#8594</a></button>
        </div>
    </section>
    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 "> Book Flight & Cabs </h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/air1.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Singapore Airline</b></h4>
                        <p>
                            Changi
                            <span style="color: red ">Singapore</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-3,500</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air2.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Paramount Airway</b></h4>
                        <p>
                            Chennai
                            <span style="color: red "> Tamil Nadu</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-4,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air3.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Emirates</b></h4>
                        <p>
                            Dubai
                            <span style="color: red ">UAE</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-3,000</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="food__list__container__button ">
            <button class="food__list__container__button__work "><a href="./flights.php">View &#8594</a></button>
        </div>
    </section>
</body>

<footer class="footer ">
    <div class="container ">
        <div class="row ">
            <div class="footer-col ">
                <h4>company</h4>
                <ul>
                    <li>
                        <a href="./about.html">about us</a>
                    </li>
                    <li>
                        <a href="# ">our services</a>
                    </li>
                    <li>
                        <a href="# ">privacy policy</a>
                    </li>
                    <li>
                        <a href="# ">Payment option</a>
                    </li>
                    <li>
                        <a href="./feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col ">
                <h4>Online Booking</h4>
                <ul>
                    <li>
                        <a href="# ">Travel Destination</a>
                    </li>
                    <li>
                        <a href="# ">Hotel booking</a>
                    </li>
                    <li>
                        <a href="# ">Flight booking</a>
                    </li>
                    <li>
                        <a href="# ">Cab booking</a>
                    </li>
                    <li>
                        <a href="# ">Restaurant Booking</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col ">
                <h4> Contact</h4>
                <ul>
                    <li>
                        <a href="mailto:prashant.singh_cs19@gla.ac.in " target="_blank "> Prashant Singh</a>
                    </li>
                    <li>
                        <a href="mailto:abhinandan.jain_cs19@gla.ac.in " target="_blank "> Abhinandan Jain</a>
                    </li>
                    <li>
                        <a href="mailto:aviral.jaiswal_cs19@gla.ac.in " target="_blank "> Aviral Jaiswal</a>
                    </li>
                    <li>
                        <a href="mailto:naveen.pandey_cs19@gla.ac.in " target="_blank "> Naveen Pandey</a>
                    </li>
                    <li>
                        <a href="mailto:pratik.srivastava_cs19@gla.ac.in " target="_blank "> Pratik Srivastava</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col " id="footer_logo ">
                <img src="./assets/logo.png " alt="logo " class="brand__logo ">
            </div>
        </div>
    </div>

</footer>

</html>