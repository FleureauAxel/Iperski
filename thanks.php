<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
    <?php
    include_once "Connessione_register.php";
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

        <?php
        if (!isset($r) || $r == FALSE) {
            $surname = $_POST['lname'];
            $name = $_POST['fname'];
            $address = $_POST['address'];
            $date = $_POST['born'];
            $cap = $_POST['CAP'];
            $file = $_POST['file'];
            $email = $_POST['mail'];
            $pwd = md5($_POST['pwd']);
            $cf = $_POST['cf'];
            $cell = $_POST['cell'];

            $imgData = addslashes(file_get_contents($_FILES['$file']['tmp_name']));
            $imageProperties = getimageSize($_FILES['$file']['tmp_name']);

            if (($conn->query("INSERT INTO clienti VALUES ('', '$name', '$surname', '$date', '$cf', '$address', '$cap', '$cell', '$file');"))) 
            {
                $user = $conn->query("SELECT idCliente FROM clienti WHERE cf = '$cf';")->fetch_all(MYSQLI_NUM);
                $us = $user[0];
                if ($conn->query("INSERT INTO Account VALUES ('', '$email', '$pwd', '$us[0]');") === TRUE)
                    {echo "registrazione avvenuta con successo!";}
                else{echo "oh no!";echo " Error: " . $sql . "<br>" . $conn->error;}
            
        ?>
                <form method="GET" action="<?php echo end(explode("/", $_SERVER["SCRIPT_NAME"])); ?>">
                    <fieldset>
                        <h2>
                            <p style="color: #060606">Grazie per esserti iscritto!</p>
                        </h2>
                    </fieldset>
                </form>

            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            ?>

                <form method="GET" action="<?php echo end(explode("/", $_SERVER["SCRIPT_NAME"])); ?>">
                    <fieldset>
                        <h2>
                            <p style="color: #060606">Ritenta, sarai più fortunato!</p>
                        </h2>
                    </fieldset>
                </form>

            <?php
            }} echo "Error: " . $sql . "<br>" . $conn->error;
            ?>
</div>
</body>

</html>