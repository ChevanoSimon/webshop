<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="CSS/indexcss.css">
</head>
<body>

<div class="wrapper">
    <div class="LoginSpace">

        <?php
        if (isset($_SESSION['klant_id'])) {
            ?>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Logout 2</button>
            <?php
        }
        else{
            ?>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login 1</button>
        <?php
        }

        ?>
            <div id="id01" class="modal">
              
              <form class="modal-content animate" action="php/verwerk_inloggen.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                </div>
            
                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
            
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
            
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>

              </form>
            </div>
        <div id="id02" class="modal">

            <form class="modal-content animate" action="php/verwerk_inloggen.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <button><a href="/index.php">Logout</a></button>
                    <?php

                    ?>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
        </div>
    
    <div class="header">
        <?php
        if (isset($_SESSION['klant_id']))
        {
            if ($_SESSION['medewerker'] == true)
            {
                echo "Welcome medewerker";
            }

            else
            {
                echo "<h2>Welcome gebruiker</h2>";
                echo $_SESSION['klant_id'];
            }
        }
        else{
            echo "<h2>Home</h2>";
        }

        ?>

        <h2>Home</h2>
    </div>
    
    <div class="buttonrow">
        <button type="button" onclick="location.href='index.php'" class="OwnButton">Home</button>
        <button type="button" onclick="location.href='productenpagina.php'" class="OwnButton">Producten Pagina</button>
        <button type="button" onclick="location.href='registratie.php'" class="OwnButton">Registratie</button>
    </div>
    
    <div class="middlewrap">
        
        <div class="main1">
            
        </div>
        
        <div class="main2">
            
        </div>
        
        <div class="main3">

        </div>
        
    </div>
    
</div>


</body>
</html>
