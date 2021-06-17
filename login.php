<?php
include_once "connessione.php";
session_start();
include_once "./widgets/appbar.php";

//Controllo se è una richiesta di POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //stabilisco la connessione di tipo LOGGER
    $conn = Connetti('L');

    // username and password sent from form 
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pwd']);

    $query = "SELECT * FROM accounts WHERE username = '$user' and pwd = SHA1('$pass');";
    $result = mysqli_query($conn, $query);

    try {
        $row = ($result)->fetch_all(MYSQLI_ASSOC);
        $count = sizeof($row);

        //echo 'DIM ARRAY: ' . $count;

        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count != 0) {
            $row = $row[0]; //prendo il primo elemento dato dea fetch_all
            echo 'LOGIN OK!';
            $idAccount = $row['idAccount'];
            $idPersona = $row['persona'];
            $username = $row['username'];
            $tipo = $row['tipo'];

            $_SESSION['idUtente'] = $idPersona;
            $_SESSION['username'] = $username;
            $_SESSION['persona'] = $idPersona;
            $_SESSION['tipo'] = $tipo;

            echo $username;
            header('Location: ./area-personale.php');
        }
    } catch (\Throwable $th) {
        echo 'Errore login! Username o password errati';
    }
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>FastDelivery - Login</title>
</head>

<body style="background-color:powderblue;">

  <?php echo AppBarWidget(); ?>
    <div id="logreg-forms">
        <form class="form-signin" action="login.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Accesso al servizio:</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> With Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> With Google</span> </button>
            </div>
            <p style="text-align:center"> OPPURE </p>
            <input name="username" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus="">
            <input name="pwd" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>Accedi</button>
            <!-- <a href="#" id="forgot_pswd">Forgot password?</a> -->
            <hr>
        </form>

        <!-- <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form> -->

        <form action="/signup/" class="form-signup">
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Accedi con Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Accedi con Google+</span> </button>
            </div>

            <p style="text-align:center">OR</p>

            <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
            <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
            <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
            <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i>Entra nel portale!</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i>annulla</a>
        </form>
        <br>

    </div>
    <!-- <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black">
    </p> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>

</html>