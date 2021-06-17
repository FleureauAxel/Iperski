<?php
function Connetti($tipo)
{
    $utente = "";

    switch ($tipo) {
        case 'L':
            $utente = "logger";
            break;
        case 'C':
            $utente = "cliente";
            break;
        case 'D':
            $utente = "dipendente";
            break;
        case 'V':
            $utente = "visitatore";
            break;
        case 'R':
            $utente = "registratore";
            break;
        default:
            $utente = "visitatore";
            break;
    }

    // definisco 4 variabili:
    define("DB_HOST", "localhost");
    define("DB_USER", $utente);
    define("DB_PWD", "");
    define("DB_NAME", "iperski");

    // stabilisco la connessione
    $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

    // la connessione è attiva?
    if ($conn->connect_error) {
        die("connessione fallita " . mysqli_connect_error());
    }
    return $conn;
}

function getConn() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

    // la connessione è attiva?
    if ($conn->connect_error) {
        die("connessione fallita " . mysqli_connect_error());
    }
    return $conn;
}
