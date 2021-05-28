<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Static page | IperSki</title>
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

<body>
    <div class="container page static-page">
        <header class="top_panel top_panel--page">
            <?php require("navbar.php");?>
        </header>
        <div class="breadcrumbs">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="..">Home</a> / <a href="static.php" class="current">Static page</a>
                </div>
            </div>
        </div>
        <section class="static">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="main">
                        <h1 class="title">Privacy Policy H1</h1>
                        <div class="content">
                            <p>
                                Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                            </p>
                            <p>
                                <b>
                                    Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator <a href="#">adjusts the complexity</a> to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                </b>
                            </p>

                            <div class="js-section" data-title="Privacy Policy H2">
                                <h2>Privacy Policy H2</h2>
                                <p>
                                    Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                </p>
                            </div>
                            <div class="js-section" data-title="Privacy Policy H3">
                                <h3>Privacy Policy H3</h3>
                                <p>
                                    Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                </p>
                            </div>
                            <div class="js-section" data-title="Privacy Policy H4">
                                <h4>Privacy Policy H4</h4>
                                <p>
                                    Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                </p>
                            </div>
                            <div class="js-section" data-title="Privacy Policy H5">
                                <h5>Privacy Policy H5</h5>
                                <p>
                                    Introductory instruction in the direction of Cycle Connect-training based on the power index (FTP). Each time you connect to the system, the simulator adjusts the complexity to a specific person. Thus, in one lesson, people with different levels of training can be at neighboring simulators.
                                </p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                </ul>
                            </div>
                            <div class="js-section" data-title="Privacy Policy H6">
                                <h6>Privacy Policy H6</h6>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint!</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar" id="sidebar">
                        <ul></ul>
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