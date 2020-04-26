<?php
require_once('includes/menu.php');

?>

<html>

<head>
	<meta charset="utf-8">
	<title> Page d'accueil </title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <header id="headerindex">



        <main>
        <div class="logo">
                            <img src="images/easytime.png" alt="logo">
                        </div>
           
            <p> En cette période de confinement, Easy time est la pour vous faciliter la vie. </p>
            <a href="#quotemenu"><input type="button" value="Découvrir nos services"></a>
        </main>

    </header>

    <section id="quotemenu">

    <div class="quote">
		
		<div>
			<div class="box1" id="box">
            <h2> Les stocks </h2><br>
				<p> Ici vous allez pouvoir consulter les stocks des produits les plus recherchés en magasin, pour vous éviter de nous déplacer sans intêret. <p><br>
				
				<a  href="stocks.php"><input type="button" value="En savoir plus" class="btn"></a>
			</div>
			<div class="bg"></div>
		</div>
		
		<div>
			<div class="box2" id="box">
            <h2> L'affluence en magasin </h2><br>
				<p> Vous voulez éviter de faire la queue pendant des heures lorsque vous faites vos courses ? Venez consulter l'affluence dans vos magasins les plus proches de chez vous. <p><br>
			
				<a  href="affluence.php"><input type="button" value="En savoir plus" class="btn"></a>
			</div>
			<div class="bg"></div>
		</div>
		
		<div>
			<div class="box3" id="box">
            <h2> Service Volontariat </h2><br>
				<p> Vous voulez gagner un peu d'argent en aidant les gens a faire leurs courses ? Ou alors faire les courses vous embête et vous préferiez payer quelqu'un pour cette tache ?  <p><br>
				
				<a  href="volontaires.php"><input type="button" value="En savoir plus" class="btn"></a>
			</div>
			<div class="bg"></div>
		</div>
		
    </div>
    
            </section>

<footer>

    <p> Retrouvez nous sur nos réseaux sociaux :</p>

    <div id="rs"> 

        <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>

    </div>

</footer>

</body>

</html>
