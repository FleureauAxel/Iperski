<?php

$conn = new mysqli("localhost", "registratore", "", "iperski");

if ($conn->connect_error) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}
?>