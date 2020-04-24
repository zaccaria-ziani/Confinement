<?php 

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link href="affluence.css" type="text/css" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    
<header id="headerindex">

<nav>

<?php
    if(isset($_SESSION["id"]))
    { 
?>

<div class="menu-wrap">
<input type="checkbox" class="toggler">
    <div class="hamburger"><div></div>
    </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="affluence.php">Service Affluence</a></li>
                        <li><a href="volontaires.php">Service Volontaire</a></li>
                        <li><a href="stocks.php">Stocks disponibles</a></li>
                        <li><a href="profil.php">Mon profil</a></li>
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<?php }
    else
    { 
?>

<div class="menu-wrap">
<input type="checkbox" class="toggler">
    <div class="hamburger"><div></div>
    </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<?php }

?>

</nav>



    </header>
    
</body>
</html>