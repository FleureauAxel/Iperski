<?php
include_once "connessione_register.php";

session_start();

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login | IperSki</title>
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

<div class="container">
        <header class="top_panel top_panel--page">
            <?php require("navbar.php");?>
        </header>
        <div>
        <div class="modal modal_window modal_training" style="margin-left: 25%;" id="join">
        <div class="modal_wrap">
          <br><br><br><br><br><br><br><br><br>
          <div class="wrap">
                <div class="wrap_float">
                <h2 class="page_title">Iscrizione</h2>
                <div class="trainer">
                    <div class="userpic ie-img">
                        <img src="img/avatar.png" alt="">
                    </div>
                    <div class="name">
                        Inserire i propri dati di seguito
                    </div>
                </div>
                <div class="cost" name="regForm" >Dati anagrafici</div>
                <form class="form" action="thanks.php" method="POST">
                    <div class="input_wrap">
                        <input type="text" placeholder="Nome" class="input" name="fname" required>
                    </div>
                    <div class="input_wrap">
                        <input type="text" placeholder="Cognome" class="input" name="lname">
                    </div>
                    <div class="input_wrap fullwidth textarea_wrap">
                        <textarea class="textarea" placeholder="Indirizzo" name="address"></textarea>
                    </div>
                    <div class="input_wrap" style="padding-top:3.5px;">
                        <input type="text" placeholder="CAP" class="input" name="CAP">
                    </div>
                    <div class="input_wrap">
                        <input type="date" placeholder="Data di nascita" class="input" name="born">
                    </div>
                    <div class="input_wrap">
                        <input type="file" placeholder="foto" class="input" name="file">
                    </div>
                    <div class="input_wrap"style="padding-top:5px;">
                        <input type="email" placeholder="E-mail" class="input" name="mail" required>
                    </div>
                    <div class="input_wrap">
                        <input type="password" placeholder="Password" class="input" name="pwd">
                    </div>
                    <div class="input_wrap">
                        <input type="text" placeholder="Codice Fiscale" class="input" name="cf" required>
                    </div>
                    <div class="input_wrap">
                        <input type="tel" placeholder="Cellulare" class="input" name="cell" required>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" id="check-3" checked>
                        <label for="check-3">
                        Acconsento al trattamento dei miei <a href="#">dati personali</a> e acconsento ai termini sulla <a href="#">politica sulla privacy</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn submit">INVIA</button>
                </form>
                <div class="modal_close"></div>
            </div>
        </div>
        
    </div>
    <br><br><br>
        </div></div>
        <?php require("footer.php");?></div>

    <p style="text-align: center;">
        <a href="index.php" style="color: black;">Torna alla Home</a>
    </p>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.arcticmodal.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>