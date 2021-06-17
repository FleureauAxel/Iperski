<?php

$conn = new mysqli("localhost", "root", "", "iperski");

if ($conn->connect_error) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}
?>