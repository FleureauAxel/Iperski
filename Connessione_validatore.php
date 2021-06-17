<?php

$conn = new mysqli("localhost", "validatore", "", "iperski");

if ($conn->connect_error) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}

?>