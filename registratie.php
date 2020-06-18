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
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
            
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
        </div>
    
    <div class="header">
        <h2>Registratie</h2>
    </div>
    
    <div class="buttonrow">
        <button type="button" onclick="location.href='index.php'" class="OwnButton">Home</button>
        <button type="button" onclick="location.href='productenpagina.php'" class="OwnButton">Producten Pagina</button>
        <button type="button" onclick="location.href='registratie.php'" class="OwnButton">Registratie</button>
    </div>
    
    <div class="middlewrap">
        
        <div class="main4">
            <form name="Inschrijf Formulier" class="form1" method="post" action="php/verwerk_registreren.php">
                <h4>Inschrijf Formulier</h4>
                <table BORDER=0 class="tableConfix">
                    <TR>
                        <TD WIDTH=120><label for="firstName">Naam:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="Text" id="firstName" NAME="firstName"></TD>
                    </TR>

                    <TR>
                        <TD><label for="surname">Achternaam:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="Text" id="surname" NAME="surName"></TD>
                    </TR>

                    <TR>
                        <TD><label for="username">Gebruikersnaam:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="Text" id="username" NAME="userName"></TD>
                    </TR>

                    <TR>
                        <TD><label for="password">Wachtwoord:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="Text" id="password" NAME="passWord"></TD>
                    </TR>

                    <TR>
                        <TD><label for="address">Adres:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="address" NAME="address"></TD>
                    </TR>

                    <TR>
                        <TD><label for="zipcode">Postcode:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="zipcode" NAME="zipCode"></TD>
                    </TR>

                    <tr>
                        <TD><label for="city">Woonplaats:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="city" NAME="city"></TD>
                    </TR>

                    <TR>
                        <TD><label for="datebirth">Geboortedatum:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="datebirth" NAME="dateBirth"></TD>
                    </TR>

                    <TR>
                        <TD><label for="phoneN">Telefoon nummer:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="phoneN" NAME="phone"></TD>
                    </TR>

                    <TR>
                        <TD><label for="mobileN">Mobiele nummer: </label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="mobileN" NAME="mobile"></TD>
                    </TR>

                    <TR>
                        <TD><label for="email">E-mail:</label><br></TD>
                        <TD><INPUT class="OwnInput" TYPE="text" id="email" NAME="eMail"></TD>
                    </TR>
                </table>
                <br>
                <input type="submit" value="Verzenden">
            </form>
        </div>
    </div>
    
</div>


</body>
</html>
