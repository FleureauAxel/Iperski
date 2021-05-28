<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Classes single 2 | IperSki</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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

<body data-color="#FFDC49" data-color-type="light">
    <div class="container classes_page classes-single-page">
        <?php require("navbar.php");?>
        <section class="classes_header">
            <div class="left" style="background-image: url(img/placeholder.jpg);">
                <div class="content">
                    <div class="breadcrumbs">
                        <a href="..">Home</a> / <a href="classes.php">Classes</a> / <a href="classes-single.php" class="current">Classes Single</a>
                    </div>
                    <h1 class="page_title">The Best Fitness Classes With Professionals</h1>
                    <div class="links">
                        <button class="btn js-change getModal" data-href="#join" style="background: none;">JOIN NOW</button>
                        <a href="#shedule" class="anchor js-anchor">Schedule</a>
                    </div>
                </div>
            </div>
            <div class="right js-change" style="background-color: inherit">
                <div class="video_link getModal js-video" data-href="#video" data-src="XXXXXX" style="background-image: url(img/placeholder.jpg)">
                    <div class="play-btn"></div>
                </div>
            </div>
        </section>
        <div class="classes_info">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="items">
                        <div class="item">
                            <div class="_icon">
                                <img src="img/placeholder.jpg" alt="">
                            </div>
                            <div class="_title">Class time:</div>
                            <div class="_val">30-40 minutes</div>
                        </div>
                        <div class="item">
                            <div class="_icon">
                                <img src="img/placeholder.jpg" alt="">
                            </div>
                            <div class="_title">Years:</div>
                            <div class="_val">Adults 18-40</div>
                        </div>
                        <div class="item">
                            <div class="_icon">
                                <img src="img/placeholder.jpg" alt="">
                            </div>
                            <div class="_title">Level of training:</div>
                            <div class="_val">For all</div>
                        </div>
                    </div>
                    <div class="text">
                        Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                    </div>
                </div>
            </div>
        </div>
        <section class="schedule" id="shedule">
            <div class="wrap">
                <div class="wrap_float">
                    <h2 class="title">Schedule</h2>
                    <div class="date date-field js-date">
                        <div class="date-span"><span class="js-day">20</span> <span class="js-month">May</span> <span class="js-year">2020</span></div>
                        <input type="text" class="js_calendar input-date">
                        <input type="hidden" value="" class="input-date-value">
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
                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_top">
                                <p class="block time">20 May, 09:00 am</p>
                            </div>
                            <div class="item_center">
                                <p class="block classroom">Classroom #1</p>
                                <h3 class="block _title">
                                    Antigravity yoga in the hammocks
                                </h3>
                            </div>
                            <div class="item_bottom">
                                <div class="trainer">
                                    <div class="img ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <p class="block name">John Digistrict</p>
                                </div>
                                <button data-href="#join" class="btn getModal">Join now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="trainers-block">
            <div class="wrap">
                <div class="wrap_float">
                    <h2 class="title">Fitness Trainers</h2>
                    <div class="section_content">
                        <a href="trainer-single.php" class="item">
                            <div class="img ie-img"><img src="img/placeholder.jpg" alt=""></div>
                            <h3 class="block name">Maya <br>Delia</h3>
                            <div class="position">Fitness Trainer</div>
                        </a>
                        <a href="trainer-single.php" class="item">
                            <div class="img ie-img"><img src="img/placeholder.jpg" alt=""></div>
                            <h3 class="block name">John <br>Digistrict</h3>
                            <div class="position">Fitness Trainer</div>
                        </a>
                        <a href="trainer-single.php" class="item">
                            <div class="img ie-img"><img src="img/placeholder.jpg" alt=""></div>
                            <h3 class="block name">Victor <br>Shibut</h3>
                            <div class="position">Fitness Trainer</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_div">
                        <h2 class="title">Reviews</h2>
                        <div class="rating">
                            <div class="stars">
                                <div class="star filled"></div>
                            </div>
                            <div class="p">4.0</div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="left">
                            <div class="write-review">
                                <div class="user-rating">
                                    <div class="p">Rate This Classes:</div>
                                    <div class="stars user-rating">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="userpic ie-img">
                                        <input type="file" id="file-1">
                                        <label for="file-1"></label>
                                    </div>
                                    <input type="text" class="input" placeholder="Write a review">
                                    <button type="submit" class="submit"></button>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comment-item">
                                    <div class="userpic ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">Elena Petrova</div>
                                        <div class="stars">
                                            <div class="star filled"></div>
                                            <div class="star filled"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="date">21.09.2019</div>
                                    </div>
                                    <div class="comment-text">
                                        Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                    </div>
                                </div>

                                <div class="comment-item">
                                    <div class="userpic ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">Elena Petrova</div>
                                        <div class="stars">
                                            <div class="star filled"></div>
                                            <div class="star filled"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="date">21.09.2019</div>
                                    </div>
                                    <div class="comment-text">
                                        Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                    </div>
                                </div>

                                <div class="comment-item">
                                    <div class="userpic ie-img">
                                        <img src="img/placeholder.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">Elena Petrova</div>
                                        <div class="stars">
                                            <div class="star filled"></div>
                                            <div class="star filled"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="date">21.09.2019</div>
                                    </div>
                                    <div class="comment-text">
                                        Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <a class="arrow prev"></a>
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" class="active">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" class="points">...</a></li>
                                    <li><a href="#">30</a></li>
                                    <li><a href="#">31</a></li>
                                </ul>
                                <a class="arrow next"></a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="sidebar_block sign_up_block">
                                <h4 class="_title">
                                    Only authorized users can write reviews
                                </h4>
                                <p class="_subtitle">
                                    Register, sign up for training, monitor your activity, write reviews
                                </p>
                                <a href="price.php" class="btn">SIGN UP TODAY</a>
                            </div>
                            <div class="sidebar_block free_training" style="background-image: url(img/placeholder.jpg);">
                                <h4 class="_title">
                                    FREE training
                                </h4>
                                <p class="_subtitle">
                                    Sign up for a free <br>test workout
                                </p>
                                <button class="btn getModal" data-href="#join">JOIN NOW</button>
                                <div class="tag">PROMO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="photogallery">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_top">
                        <h2 class="title">
                            Photogallery
                        </h2>
                        <div class="arrows">
                            <div class="arrow prev slick-arrow" style="">Prev</div>
                            <div class="arrow next slick-arrow" style="">Next</div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="photo-slider hidden-scroll lightgallery" id="photo-slider">
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                            <a href="img/placeholder.jpg" class="slide-item ie-img">
                                <img src="img/placeholder.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require("footer.php");?>
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