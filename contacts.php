<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contatti | IperSki</title>
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
    <div class="container page contacts-page">
        <header class="top_panel top_panel--page">
                        <?php require("navbar.php");?>
        </header>
        <div class="breadcrumbs">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="index.php">Home</a> / <a href="contacts.php" class="current">Contatti</a>
                </div>
            </div>
        </div>
        <section class="contacts_section">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_div">
                        <h1 class="page_title">Contatti</h1>
                        <div class="city_select select_div" id="city_select">
                            <div class="_city select_val">PORDENONE</div>
                        </div>
                    </div>
                        <!--Maps here-->
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":564,"width":1080,"zoom":17,"queryString":"Via Interna, 7, Pordenone, PN, Italia","place_id":"ChIJEcu-hUx7eUcR3CnP_vLW60s","satellite":false,"centerCoord":[45.968008616426154,12.661213900000003],"cid":"0x4bebd6f2fecf29dc","lang":"it","cityUrl":"/italy/portogruaro-45463","cityAnchorText":"Mappa di Portogruaro, Area Nord, Italia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"526732"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=526732';
                        s.async = true;
                        s.onload = function (e) {
                        window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                        })();</script><a href="https://1map.com/it/map-embed">1 Map</a></div>

                    <div class="columns" style="padding-top:20px">
                        <div class="column">
                            <h3 class="_title">dati di contatto:</h3>
                            <div class="_content">
                                <div class="director">
                                    <div class="photo ie-img">
                                        <img src="img/axel.JPEG" alt="">
                                    </div>
                                    <div class="name">Axel Nicolas Leon Fleureau</div>
                                </div>
                                <br>Referente generale
                                <br><a href="tel:++393466037660">+39 346 603 7660</a>
                                <br><a href="mailto:axel.fleureau@icloud.com">axel.fleureau@iperski.it</a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-form">
                        <h2 class="title">Feedback Form</h2>
                        <form class="form">
                            <div class="input_wrap">
                                <input type="text" class="input" placeholder="Nome">
                            </div>
                            <div class="input_wrap">
                                <input type="tel" class="input js-tel" placeholder="Telefono*">
                            </div>
                            <div class="input_wrap select_wrap">
                                <select class="select">
                                    <option value="Ask a question">Facci una domanda</option>
                                    <option value="Other">Altro</option>
                                </select>
                            </div>
                            <div class="input_wrap textarea_wrap">
                                <textarea class="textarea" placeholder="Messaggio"></textarea>
                            </div>
                            <div class="agreement">
                                <input type="checkbox" id="check-1" checked>
                                <label for="check-1">
                                    Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento alla <a href="#">privacy policy</a>
                                </label>
                            </div>
                            <button class="btn send js-send-btn">INVIA</button>
                        </form>
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
        <div class="modal modal_window modal_success" id="success">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Grazie! i tuoi dati sono stati inviati
                </h2>
                <div class="modal_subtitle">
                    a presto!
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