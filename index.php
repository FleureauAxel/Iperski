<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home | IperSki</title>
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
    <?php
        include_once "Connessione.php";
        ini_set('display_errors', 0);
        function sanitize($s)
        {
            $fs = $s; //return mysqli_real_escape_string($s);
            $delchar = array(";", "--", "%");
            foreach ($delchar as $c) {
                $fs = str_replace($c, "", $fs);
            }
            return $fs;
        }

        if (array_key_exists("tabname", $_GET)) {
            $myquery = "SELECT * FROM " . sanitize($_GET["tabname"]) . ";";
            $r = $conn->query($myquery);
        }
    ?>
    <div class="container">
        <header class="top_panel">
            <?php require("navbar.php");?>
        </header>
        <section class="top_slider">
            <div class="slider_wrap" id="main_slider">
                <div class="slide" data-color="#FF5100" data-color-type="dark">
                    <div class="left" style="background-image: url(img/skirisalita.jpg)">
                        <div class="slide_content">
                            <div>
                                <h2 class="_title">
                                    Il migliore impianto di risalita al mondo! #SkiPass
                                </h2>
                                <p class="_subtitle">
                                    "professionalità" è il nostro motto.
                                </p>
                                <a href="risalita.php" class="btn">Prenota ora</a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_top">
                            <p class="p">
                                <i></i>
                                Il massimo sulla <br>Risalita <a href="trainers.php">Con i nostri <br>Professionisti</a>
                            </p>
                        </div>
                        <div class="right_bottom">
                            <a class="video_link getModal js-video" data-href="#video" data-src="1I-kKGO7i5E" style="background-image: url(img/skiris.jpg)">
                                <div class="play-btn"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide" data-color="#FF4F58" data-color-type="dark">
                    <div class="left" style="background-image: url(img/skitumblr.jpg)">
                        <div class="slide_content">
                            <div>
                                <h2 class="_title">
                                    Le nostre piste da Scii.
                                </h2>
                                <p class="_subtitle">
                                    Ti insegniamo ad essere determinato nei tuoi obiettivi!
                                </p>
                                <a href="risalita.php" class="btn">Prenota ora</a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_top">
                            <p class="p">
                                <i></i>
                                Il massimo dello <br>Scii <a href="trainers.htm">Con i nostri <br>Professionisti</a>
                            </p>
                        </div>
                        <div class="right_bottom">
                            <a class="video_link getModal js-video" data-href="#video" data-src="Kwn-833mWF0" style="background-image: url(img/skiwall.jpg)">
                                <div class="play-btn"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide" data-color="#7749FF" data-color-type="dark">
                    <div class="left" style="background-image: url(img/kidsski.jpg)">
                        <div class="slide_content">
                            <div>
                                <h2 class="_title">
                                    I migliori corsi per i più piccoli!
                                </h2>
                                <p class="_subtitle">
                                    "Impara divertendoti" è il nostro motto.
                                </p>
                                <a href="risalita.php" class="btn">Prenota ora</a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_top">
                            <p class="p">
                                <i></i>
                                I migliori corsi di <br>Scii <a href="trainers.php">Con i nostri <br>Professionisti</a>
                            </p>
                        </div>
                        <div class="right_bottom">
                            <a class="video_link getModal js-video" data-href="#video" data-src="BDZDGZvn60k" style="background-image: url(https://www.dolomitisuperski.com/Fotos%202019-20/Famiglia/image-thumb__5240591__2018__hero-sm/44%C2%A9www.wisthaler.com_19_03_dolomitisuperski_HAW_6350%20%20%20Seiser%20Alm.JPG.webp)">
                                <div class="play-btn"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_block">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="#schedule" class="scroll_down pulse js-anchor">
                            Scrolla
                        </a>
                        <div class="socials">
                            <a href="#" class="linked-in"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows">
                <div class="arrow prev"></div>
                <div class="arrow next"></div>
            </div>
        </section>
        <section class="classes">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_top">
                        <h2 class="title">I Servizi</h2>
                        <div class="arrows">
                            <div class="arrow prev">Prec</div>
                            <div class="arrow next">Prox</div>
                        </div>
                        <a href="services.php" class="link"><span>Le Nostre Classi</span></a>
                    </div>
                    <div class="slider_wrap">
                        <div class="classes_slider" id="classes_slider">
                            <a href="risalita.php" class="slide classes_item" style="background-color: #FF5100" data-color-type="dark">
                                <div class="slide_right">
                                    <div class="image ie-img">
                                        <img class="js-image" src="img/technician.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slide_left">
                                    <div class="_category">Soccorso GPS</div>
                                    <h3 class="_title">Referente</h3>
                                    <div class="_author">
                                        <div class="img ie-img">
                                            <img src="img/axel.JPEG" alt="">
                                        </div>
                                        <p class="name">Axel Nicolàs Leon Fleureau</p>
                                    </div>
                                </div>
                            </a>

                            <a href="risalita.php" class="slide classes_item" style="background-color: #7749FF" data-color-type="dark">
                                <div class="slide_right">
                                    <div class="image ie-img">
                                        <img class="js-image" src="img/railWAY.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="slide_left">
                                    <div class="_category">Risalita</div>
                                    <h3 class="_title">Referente</h3>
                                    <div class="_author">
                                        <div class="img ie-img">
                                            <img src="img/axel.JPEG" alt="">
                                        </div>
                                        <p class="name">Axel Nicolàs Leon Fleureau</p>
                                    </div>
                                </div>
                            </a>

                            <a href="risalita.php" class="slide classes_item" style="background-color: #476EFF" data-color-type="dark">
                                <div class="slide_right">
                                    <div class="image ie-img">
                                        <img class="js-image" src="img/axlski.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slide_left">
                                    <div class="_category">Sci</div>
                                    <h3 class="_title">Referente</h3>
                                    <div class="_author">
                                        <div class="img ie-img">
                                            <img src="img/Pippo.png" alt="">
                                        </div>
                                        <p class="name">Pippo DePippis</p>
                                    </div>
                                </div>
                            </a>

                            <a href="risalita.php" class="slide classes_item" style="background-color: #FF4F58" data-color-type="dark">
                                <div class="slide_right">
                                    <div class="image ie-img">
                                        <img class="js-image" src="img/axel.JPEG" alt="">
                                    </div>
                                </div>
                                <div class="slide_left">
                                    <div class="_category">MasterClass</div>
                                    <h3 class="_title">Referente</h3>
                                    <div class="_author">
                                        <div class="img ie-img">
                                            <img src="img/pluto.jpg" alt="">
                                        </div>
                                        <p class="name">Pluto DePlutus</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="schedule" id="schedule">
            <?php require("schedulation.php");?>
        </section>
        
        <?php
            require("Comprensori.php");
        ?>

        <section class="blog_section">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_top">
                        <h2 class="title">Webcams</h2>
                        <a href="blog.php" class="link">Tutte</a>
                    </div>
                    <div class="section_content">
                        <a href="blog-single.php" class="blog_item">
                            <div class="img ie-img">
                                <img src="https://panodata.panomax.com/cams/1343/sassolungo_e_sella.jpg?1622410202313" alt=""> <!-- prendere immagini webcam da db-->
                            </div>
                            <p class="_date"><span class="js-day"></span> <span class="js-month"></span></p>
                            <h3 class="_title">
                                Val di Fassa
                            </h3>
                        </a>

                        <a href="blog-single.php" class="blog_item">
                            <div class="img ie-img" style="background-color: #000;">
                                <img src="img/favicons/favicon-32x32.png" alt="">
                            </div>
                            <p class="_date"><span class="js-day"></span> <span class="js-month"></span></p>
                            <h3 class="_title">
                                Iperski | Kennedy
                            </h3>
                        </a>

                        <a href="blog-single.php" class="blog_item">
                            <div class="img ie-img">
                                <img src="http://webcam.zallinger.com/latest/latestOlL.jpg?1622410102525" alt="">
                            </div>
                            <p class="_date"><span class="js-day"></span> <span class="js-month"></span></p>
                            <h3 class="_title">
                                Marmolada
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="video_section ie-img">
            <img src="img/skipasssales.jpg" class="img" alt="">
            <div class="wrap">
                <div class="wrap_float">
                    <h2 class="title">
                    AVEVI UNO <br>SKIPASS <br>VALIDO PER LA STAGIONE 2019/2020?
                    </h2>
                    <div class="play_btn getModal js-video" data-href="#video" data-src="Kwn-833mWF0">
                        Scopri le nostre <br>iniziative e scontistiche!
                    </div>
                </div>
            </div>
        </section>
        <section class="section_description">
            <div class="wrap">
                <div class="wrap_float">
                    <h2 class="title">KENNEDY IPERSKI</h2>
                    <p class="block text">
                    In inverno piste bianche perfettamente preparate, in estate profumati prati fioriti e panorami da sogno. Il Kennedy offre entrambe le cose: Sia in abito invernale sia in quello estivo, il Patrimonio Mondiale UNESCO incanta in ogni stagione. </br>Il Kennedy si trasforma in estate in un mondo di superlative avventure. Che si tratti di escursionismo o tour in bicicletta, nelle Dolomiti ogni sport trova il suo posto.
                    </p>
                </div>
            </div>
        </section>
        <div class="instagram-block">
            <a class="item ie-img">
                <img src="img/skitumblr.jpg" alt="">
            </a>
            <a class="item ie-img">
                <img src="img/skirisalita.jpg" alt="">
            </a>
            <a class="item ie-img">
                <img src="img/kidsski.jpg" alt="">
            </a>
            <a class="item ie-img">
                <img src="img/axlski.jpg" alt="">
            </a>
            <button class="btn submit" id="find-me">EMERGENZA</button>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong id="status" style="color:white;"></strong>
  <a id = "map-link" style="color:white;" target="_blank"></a>
</div>
        </div>
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
                    Hai delle domande?
                </h2>
                <div class="modal_subtitle">
                    Any questions or&nbsp;something <br>is&nbsp;not working? check the FAQ section
                </div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Numero dello SkiPass" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Numero di telefono" class="input js-tel">
                    </div>
                    <div class="input_wrap fullwidth textarea_wrap">
                        <textarea class="textarea" placeholder="Message text"></textarea>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-2" checked>
                        <label for="check-2">
                            Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento ai termini sulla <a href="#">politica sulla privacy</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">Prenota</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <!-- modals fasce orarie -->
    <div style="display: none;">
        <div class="modal modal_window modal_training" id="buy">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Impianto di risalita
                </h2>
                <div class="trainer">
                    <div class="userpic ie-img">
                        <img src="img/alert.png" alt="">
                    </div>
                    <div class="name">
                        Poche prenotazioni residue
                    </div>
                </div>
                <div class="cost">€ 25</div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Numero dello SkiPass" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Numero di telefono" class="input js-tel">
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-3" checked>
                        <label for="check-3">
                        Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento ai termini sulla <a href="#">politica sulla privacy</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">PRENOTA</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_window modal_training" id="join">
        <div class="modal_wrap">
                <h2 class="modal_title">
                    Impianto di risalita
                </h2>
                <div class="trainer">
                    <div class="userpic ie-img">
                        <img src="img/check.png" alt="">
                    </div>
                    <div class="name">
                        Poco affollato
                    </div>
                </div>
                <div class="cost">€ 25</div>
                <form class="form">
                    <div class="input_wrap">
                        <input type="text" placeholder="Numero dello SkiPass" class="input">
                    </div>
                    <div class="input_wrap tel">
                        <input type="tel" placeholder="Numero di telefono" class="input js-tel">
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-3" checked>
                        <label for="check-3">
                        Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento ai termini sulla <a href="#">politica sulla privacy</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn submit js-send-btn">PRENOTA</button>
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
                        Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento ai termini sulla <a href="#">politica sulla privacy</a>.
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
                    Grazie! I tuoi dati sono stati inviati
                </h2>
                <div class="modal_subtitle">
                    Ti aspettiamo presto!
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

    <!-- CONSENSO COOKIE -->
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="37a6175c-5d3d-4754-a4c7-9f2d7111ebb4" async=""></script>
    <!-- EMERGENZA GPS -->
    <script>
        function geoFindMe() {

            const status = document.querySelector('#status');
            const mapLink = document.querySelector('#map-link');

            mapLink.href = '';
            mapLink.textContent = '';

            function success(position) {
            const latitude  = position.coords.latitude;
            const longitude = position.coords.longitude;

            status.textContent = '';
            mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
            mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
            }

            function error() {
            status.textContent = 'Unable to retrieve your location';
            }

            if(!navigator.geolocation) {
            status.textContent = 'Geolocation is not supported by your browser';
            } else {
            status.textContent = 'Locating…';
            navigator.geolocation.getCurrentPosition(success, error);
            }

        }

        document.querySelector('#find-me').addEventListener('click', geoFindMe);
</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.arcticmodal.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>