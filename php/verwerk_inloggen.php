<?php
session_start();

$inlogNaam = $_POST['uname'];
$password  = $_POST['psw'];

include './connectie.php';

$vraag = "SELECT * FROM klant WHERE ";
$vraag .= " username = '" . $inlogNaam . "' AND ";
$vraag .= " password = '" . $password . "' ";

// var_dump($vraag);

//resultaat is klant die gematched wordt bij inloggen.
$resultaat = $conn->query($vraag);

//num_rows checkt als het aantal rijen in $resultaat meer dan 0 rijen heeft.
if ( $resultaat->num_rows > 0 ){
    $rij = $resultaat->fetch_assoc();

    //zet de id van de inlog als sessie voor de klant
    $_SESSION['klant_id'] = $rij['id'];
    $_SESSION['medewerker'] = $rij['medewerker'];

    $_SESSION['winkelmandje'] = array();

    echo $_SESSION['klant'];
    header('Location: ../index.php');

}

else {
    echo 'We don\'t have a match!';
}

