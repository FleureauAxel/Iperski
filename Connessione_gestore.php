<?php

$conn = new mysqli("localhost", "gestore", "", "iperski");

if ($conn->connect_error) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}

?>