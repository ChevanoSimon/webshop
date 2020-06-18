<?php
session_start();
include 'php/connectie.php';

echo '<h1> Producten </h1>';

$vraag = 'SELECT * FROM producten';
$resultaat = $conn->query($vraag);

if( $resultaat->num_rows > 0 )
    {

        while( $rij = $resultaat->fetch_assoc() )
        {
            $id = $rij['prod_id'];
            $naam = $rij['prod_naam'];
            $image = $rij['prod_image'];
            $beschrijving = $rij['beschrijving'];
            $prijs = $rij['prod_prijs'];

            echo "<form class='product'>";
            echo '<h1>' . $naam .  '</h1>';
            echo '<img src="' . $image . '">';
            echo '<p class="prijs">€ ' .  $prijs . '</p>';
            echo '<p class="omschrijving"' . $beschrijving . '</p>';
            echo '<input type="hidden" value='.$id.'> ';
            echo '< input type ="submit" value="Toevoegen">';
            echo '</form>';

        }

    }
    ?>
        <style>

            .product > img{
                width: 100px;
                height: 100px;
            }


        </style>

