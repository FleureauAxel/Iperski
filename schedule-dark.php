<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Shedule Dark | IperSki</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dark-theme.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#080B14">
    <meta name="theme-color" content="#080B14">
</head>

<body class="dark-theme">
    <div class="page-bg-image">
        <img src="img/placeholder.jpg" alt="">
    </div>
    <div class="container page">
        <header class="top_panel top_panel--page">
                        <?php require("navbar.php");?>
        </header>
        <div class="breadcrumbs">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="main-dark.php">Home</a> / <a href="shedule-dark.php" class="current">Shedule</a>
                </div>
            </div>
        </div>
        <section class="schedule schedule_section">
            <div class="wrap">
                <div class="wrap_float">
                    <h1 class="page_title">Schedule</h1>
                    <div class="date_div">
                        <div class="_title">Date:</div>
                        <div class="date date-field js-date">
                            <div class="date-span"><span class="js-day">20</span> <span class="js-month">May</span> <span class="js-year">2020</span></div>
                            <input type="text" class="js_calendar input-date">
                            <input type="hidden" value="" class="input-date-value">
                        </div>
                    </div>
                    <div class="select_div">
                        <div class="select_val">All Classes</div>
                        <select class="js-select">
                            <option value="All Classes">All Classes</option>
                            <option value="Crossfit">Crossfit</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Swimming">Swimming</option>
                        </select>
                    </div>
                    <div class="section_content">
                        <div class="item" data-color="#7749FF" data-color-type="dark">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">Yoga</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item" data-color="#FFDC49" data-color-type="light">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">CrossFit</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item" data-color="#7749FF" data-color-type="dark">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">Yoga</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item" data-color="#FF4F58" data-color-type="dark">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">Yoga</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item" data-color="#476EFF" data-color-type="dark">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">CrossFit</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item" data-color="#476EFF" data-color-type="dark">
                            <div class="item_top">
                                <div class="time">20 May, 09:00 am</div>
                                <div class="category">Yoga</div>
                            </div>
                            <div class="item_center">
                                <div class="classroom">Classroom #1</div>
                                <h3 class="_title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="trainers">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_top">
                        <h2 class="title">Trainers</h2>
                        <div class="arrows">
                            <div class="arrow prev">Prev</div>
                            <div class="arrow next">Next</div>
                        </div>
                        <a href="trainers-dark.php" class="link"><span>All Trainers</span></a>
                    </div>
                    <div class="section_content">
                        <div class="trainers_slider" id="trainers_slider">
                            <div class="item">
                                <a href="trainer-sinlge-dark.php" class="photo">
                                    <img src="img/placeholder.jpg" alt="">
                                </a>
                                <a href="trainer-sinlge.php" class="info">
                                    <div class="name">John Digistrict</div>
                                    <div class="category">Strength training</div>
                                </a>
                                <div class="socials">
                                    <a href="#" class="linked-in"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="instagram"></a>
                                </div>
                            </div>

                            <div class="item">
                                <a href="trainer-sinlge-dark.php" class="photo">
                                    <img src="img/placeholder.jpg" alt="">
                                </a>
                                <a href="trainer-sinlge.php" class="info">
                                    <div class="name">John Digistrict</div>
                                    <div class="category">Strength training</div>
                                </a>
                                <div class="socials">
                                    <a href="#" class="linked-in"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="instagram"></a>
                                </div>
                            </div>

                            <div class="item">
                                <a href="trainer-sinlge-dark.php" class="photo">
                                    <img src="img/placeholder.jpg" alt="">
                                </a>
                                <a href="trainer-sinlge.php" class="info">
                                    <div class="name">John Digistrict</div>
                                    <div class="category">Strength training</div>
                                </a>
                                <div class="socials">
                                    <a href="#" class="linked-in"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="instagram"></a>
                                </div>
                            </div>

                            <div class="item">
                                <a href="trainer-sinlge-dark.php" class="photo">
                                    <img src="img/placeholder.jpg" alt="">
                                </a>
                                <a href="trainer-sinlge.php" class="info">
                                    <div class="name">John Digistrict</div>
                                    <div class="category">Strength training</div>
                                </a>
                                <div class="socials">
                                    <a href="#" class="linked-in"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="instagram"></a>
                                </div>
                            </div>

                            <div class="item">
                                <a href="trainer-sinlge-dark.php" class="photo">
                                    <img src="img/placeholder.jpg" alt="">
                                </a>
                                <a href="trainer-sinlge.php" class="info">
                                    <div class="name">John Digistrict</div>
                                    <div class="category">Strength training</div>
                                </a>
                                <div class="socials">
                                    <a href="#" class="linked-in"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_description">
            <div class="wrap">
                <div class="wrap_float">
                    <h2 class="title">IperSki Fitness Club</h2>
                    <div class="text">
                        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                    </div>
                </div>
            </div>
        </section>
        <div class="instagram-block">
            <div class="item">
                <img src="img/placeholder.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/placeholder.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/placeholder.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/placeholder.jpg" alt="">
            </div>
        </div>
        <footer class="footer">
            <div class="footer_top">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="left">
                            <a href="main-dark.php" class="block logo">IperSki</a>
                        </div>
                        <div class="center">
                            <ul class="menu">
                                <li><a href="main-dark.php">HOME</a></li>
                                <li><a href="blog-dark.php">BLOG</a></li>
                                <li><a href="contacts-dark.php">CONTACT</a></li>
                                <li><a href="about-dark.php">ABOUT</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="socials">
                                <a href="#" class="linked-in"></a>
                                <a href="#" class="twitter"></a>
                                <a href="#" class="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_center">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="left">
                            <h4 class="block _title">NEWSLATTER</h4>
                            <p class="p">
                                Subscribe to our Newsletter to be updated. <br>We promise not to spam.
                            </p>
                            <form class="form">
                                <input type="text" class="input" placeholder="Email">
                                <button class="submit js-send-btn"></button>
                            </form>
                        </div>
                        <div class="center">
                            <div class="col">
                                <h4 class="block _title">COMPANY</h4>
                                <ul>
                                    <li><a href="main-dark.php">Home</a></li>
                                    <li><a href="about-dark.php">About</a></li>
                                    <li><a href="classes-dark.php">Classes</a></li>
                                    <li><a href="schedule-dark.php">Schedule</a></li>
                                    <li><a href="faq-dark.php">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h4 class="block _title">SERVICES</h4>
                                <ul>
                                    <li><a href="trainers-dark.php">Trainers</a></li>
                                    <li><a href="blog-dark.php">Blog</a></li>
                                    <li><a href="static-dark.php">Static</a></li>
                                    <li><a href="price-dark.php">Pricing</a></li>
                                    <li><a href="contacts-dark.php">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <h4 class="block _title">CONTACT US</h4>
                            <p class="p">
                                GymVast, 18 East 50th Street, 4th Floor, New York, NY 10022
                            </p>
                            <div class="tel">
                                <a href="tel:+111111">+ 1 65 0** 778 622</a>
                            </div>
                            <div class="email">
                                <a href="mailto:digistrict@yandex.ru">hellodigi@yandex.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="left">Copyright © 2020 IperSki. All Rights Reserved</div>
                        <div class="center">
                            <ul>
                                <li><a href="about-dark.php">About IperSki</a></li>
                                <li><a href="blog-dark.php">Blog</a></li>
                                <li><a href="static-dark.php">Privacy Policy</a></li>
                                <li><a href="sitemap-dark.php">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            Powered by <a href="hellodigi.ru" target="_blank">hellodigi.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div style="display: none;">
        <div class="modal modal_video" id="video">
            <div class="modal_wrap">
                <div class="video" id="video_wrap"></div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_question" id="ask">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Ask the coach a question
                </h2>
                <div class="modal_subtitle">
                    Any questions or&nbsp;something <br>is&nbsp;not working? Ask the coach
                </div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Name*" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Phone number*" class="input js-tel">
                    </div>
                    <div class="input_wrap fullwidth textarea_wrap">
                        <textarea class="textarea" placeholder="Message text"></textarea>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-2" checked>
                        <label for="check-2">
                            I consent to the processing of <a href="#">personal data</a> and agree to the terms and <a href="#">privacy policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">Send</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_training" id="buy">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    1 individual training
                </h2>
                <div class="trainer">
                    <div class="userpic ie-img">
                        <img src="img/placeholder.jpg" alt="">
                    </div>
                    <div class="name">
                        John Digistrict
                    </div>
                </div>
                <div class="cost">$ 3235 / month</div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Name*" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Phone number*" class="input js-tel">
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-3" checked>
                        <label for="check-3">
                            I consent to the processing of <a href="#">personal data</a> and agree to the terms and <a href="#">privacy policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">BUY NOW</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_training" id="join">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    CrossFit Basics
                </h2>
                <div class="trainer">
                    <div class="userpic ie-img">
                        <img src="img/placeholder.jpg" alt="">
                    </div>
                    <div class="name">
                        John Digistrict
                    </div>
                </div>
                <div class="cost">$ 3235 / month</div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Name*" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Phone number*" class="input js-tel">
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-4" checked>
                        <label for="check-4">
                            I consent to the processing of <a href="#">personal data</a> and agree to the terms and <a href="#">privacy policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">BUY NOW</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_training" id="vacancy">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Corporate sales Manager
                </h2>
                <div class="modal_subtitle">
                    Leave a request and we will contact you
                </div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Name*" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Phone number*" class="input js-tel">
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-5" checked>
                        <label for="check-5">
                            I consent to the processing of <a href="#">personal data</a> and agree to the terms and <a href="#">privacy policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">Apply</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_success" id="success">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Thanks! Your data has been sent
                </h2>
                <div class="modal_subtitle">
                    Expect a response soon
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.arcticmodal.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>