<?php

$conn = new mysqli("localhost", "logger", "", "iperski");

if ($conn->connect_error) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}
?>