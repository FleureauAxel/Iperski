<?php
include_once "Connessione_gestore.php";

$idAccount = $_POST['id_account'];
$idPersona = $_POST['id_persona'];
$preferenza = $_POST['preferenza'];

echo "account: " . $idAccount;
echo "persona: " . $idPersona;
echo "preferenza: " . $preferenza;
echo "<br>";

$q_autorizzaUt = "UPDATE account SET tipo = '$preferenza' WHERE idAccount = '$idAccount';";
$ris1 = mysqli_query($conn, $q_autorizzaUt);
$tmp = $ris[0];
echo $tmp;

echo "query: " . $q_autorizzaUt;
echo "<br>";

$q_delCandidatura = "DELETE FROM candidati WHERE idCandidato = '$idPersona';";
$ris2 = $conn->query($q_delCandidatura);

if ($ris1!==true) {
    if ($ris2==true) {
        header("location: ./area-gestore.php");
    } else {
        echo "Qualcosa è andato storto con la query 2. Scusate se non siamo degli ottimi data scientist ma ci pagano poco";
        echo "<h6 class=\"header-elements\">";
        echo "<p class=\"header-elements\"><a href=\"area-gestore.php\">Torna all'area gestore</a></p>";
        echo "</h6>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Qualcosa è andato storto con la query 1. Scusate se non siamo degli ottimi data scientist ma ci pagano poco";
    echo "<h6 class=\"header-elements\">";
    echo "<p class=\"header-elements\"><a href=\"area-gestore.php\">Torna all'area gestore</a></p>";
    echo "</h6>";
}
?>