<?php
session_start();
// Hier wordt ingelogt
include 'php/connectie.php';

// $_SESSION['winkelmandje'] = array();

//Stop hier alleen product ids in.
array_push( $_SESSION['winkelmandje'], 1);

// Array = gevult met 1 item, ID 1.
foreach ( $_SESSION['winkelmandje'] as $winkewagen_product ){

    $query = 'SELECT * FROM producten WHERE prod_id = ' . $winkewagen_product;

    $resultaat = $conn->query($query);

    if( $resultaat->num_rows > 0 ){

        $rij = $resultaat->fetch_assoc();
        $naam = $rij['prod_naam'];
        echo $naam;
        echo '<br />';

    }


}

