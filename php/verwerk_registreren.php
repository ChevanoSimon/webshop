<?php

$firstname = $_POST['firstName'];
$surname = $_POST['surName'];
$username = $_POST['userName'];
$password = $_POST['passWord'];

$adress = $_POST['address'];
$zipcode = $_POST['zipCode'];
$city = $_POST['city'];
$birthdate = $_POST['dateBirth'];

$housenumber = $_POST['phone'];
$mobilenumber = $_POST['mobile'];
$email = $_POST['eMail'];

$naam = $firstname . ' ' . $surname;

include './connectie.php';

$vraag = "INSERT INTO klant( firstname, surname, username, password, adress, zipcode, birthplace, housenumber, mobilenumber, email )";
$vraag .= "VALUES ('". $firstname ."', '". $surname ."', '". $username ."', '" .$password. "', '" .$adress. "', '". $zipcode ."', " .$birthdate. ", ".$housenumber.", ". $mobilenumber . ", '" .$email. "' )";

$resultaat = $conn->query($vraag);

var_dump($vraag);
echo "<br>";
var_dump($resultaat);

/* if ( $resultaat == false )
{
    echo "Fout in insert-query of toevoegen niet gelukt!";
} */

echo "<br>";
echo "<a style=
  '
      background-color: black; /* Green */
      border: none;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
  ' 
  href='../registratie.php'>Go back.</a>";