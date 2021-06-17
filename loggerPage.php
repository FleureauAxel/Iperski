<html>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            font-family: serif;
            padding: 20px;
            /*background: #313131;*/
            background: #f1e6d6;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            border: 2px solid #9b8873;
            background: #cfc2b2;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 50%;
            /*width: 100%;*/
            padding-right: 10px;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 50%;
            padding-left: 10px;
        }

        /*Container for images*/
        .fakeimg {
            background-color: #cfc2b2;
            height: 100%;
            width: auto;
            padding: 0px;
        }

        /*Style for images*/
        .trueimage {
            display: block;
            max-width: 100%;
            max-height: 33%;
            transform-origin: 0 0;
            transform: scale(33);
        }

        /* Add a card effect for articles */
        .card {
            background-color: #f1e6d6;
            padding: 20px;
            margin-top: 20px;
            /*border: 2px solid #9b8873;*/
            border-radius: 5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #443e38;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }
    </style>

    <style>
        .button {
            border-radius: 4px;
            background-color: #060606;
            border: none;
            color: #F1F1F1;
            text-align: center;
            font-size: 22px;
            padding: 18px;
            width: 160px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 10px;
            float: left;
        }

        fieldset {
            border: 0px solid gray;
            padding: 0em;
            float: left;
            font-family: serif;
        }

        legend {
            display: none;
        }

        h2 {
            margin: 0em 0;
        }

        p {
            margin: 1em 0;
        }

        #rcorners {
            border-radius: 25px;
            border: 2px solid #443e38;
            padding: 20px;
            width: 160px;
            height: 75px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>

<?php
session_start();
include_once "Connessione_logger.php";

$uname = $_POST['uname'];
$pwd = SHA1($_POST['pword']);
$error = "Errore!";


$user = $conn->query("SELECT * FROM ACCOUNT WHERE USERNAME = '$uname' AND PWD = '$pwd';")->fetch_all(MYSQLI_NUM);
if ($user != null) {
    $us = $user[0];
    // echo "ultimo accesso: $us[4]";

    //cose da fare se il login è andato bene:
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // username and password sent from form 
        $username = mysqli_real_escape_string($conn, $_POST['uname']);
        $password = mysqli_real_escape_string($conn, $_POST['pword']);
    
        $query = "SELECT idAccount, tipo FROM account WHERE username = '$uname' and pwd = '$pwd';";
        $result = mysqli_query($conn, $query);
        $row = ($result)->fetch_all(MYSQLI_ASSOC)[0];
        $count = sizeof($row);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
        
        if ($count != 0) {
            $tipo = $row['tipo'];
            $idAccount = $row['idAccount'];
            //carico i username e userid nella sessione
            $_SESSION['login_user'] = $uname;  //uname arriva dalla POST di logino.php
            $_SESSION['user_id'] = $idAccount;

            $path = "location: ./";

            if ($tipo == 'S') {
                $path = "location: ./area-scrittore.php";
            }
            if ($tipo == 'V') {
                $path = "location: ./area-validatore.php";
            }
            if ($tipo == 'G') {
                $path = "location: ./area-gestore.php";
            }
            header($path);
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
}
?>

<body>
    <div class="row">
        <h2>
            <p style="color: #060606">Perfetto, verrai reindirizzato al tuo account!</p>
        </h2>
        <h2>
            <p style="color: #060606"><?php echo $error;?></p>
        </h2>
    </div>
</body>

</html>