<?php

require_once('includes/menu.php');

$connexion= mysqli_connect("localhost","root","","easytime");
$query="SELECT * from utilisateurs WHERE login = '".$_SESSION['login']."' ";
$result= mysqli_query($connexion, $query);
$row = mysqli_fetch_array($result);
?>

<br><br><br><br>
<h1 id="titreprofil">Modifier votre profil </h1>
<div class="formulaireprofil">
		
		<form action="profil.php" method="post">
				

				<div class="infoprofil">
					
					<label for="login">Login :<br> </label>
					<input type="text" name="login" id="login" required value="<?php echo $row['login']?>">

					<br>
					<br>

					<label for="password">Mot de passe :<br></label>
					<input type="password" name="password" id="password" required value="<?php// echo $row['password']?>">

					<br>
					<br>

					<input type="submit" value="Modifier" name="modifier" /><br>
				</div>

				
		</form>
		
    </div>
                        </main>
	

    
</body>
</html>

<?php 
	if(isset($_POST['modifier']))
	{
		$connexion = mysqli_connect("localhost", "root","", "easytime");
			$login = $_POST['login'] ;                   
			$requete3 = "SELECT login FROM utilisateurs WHERE login = '$login'";         
			$query3 = mysqli_query($connexion, $requete3);         
			$resultat3 = mysqli_fetch_all($query3);             
			if (!empty($resultat3))             
			{                 
				echo "Ce Login est déjà prit";             
			}             
			else
			{
				if($_POST['login'] != $row['login'])
				{
				   $connexion = mysqli_connect("localhost","root","","livreor");
				   $query = "UPDATE utilisateurs SET login = '".$_POST['login']."' WHERE utilisateurs.login='".$row['login']."'";
				   $result = mysqli_query($connexion, $query);
				   $_SESSION['login']=$_POST['login'];
				}
				if($_POST['password'] != $row['password'])
				{
				   $connexion = mysqli_connect("localhost","root","","livreor");
				   $query = "UPDATE utilisateurs SET password = '".$_POST['password']."' WHERE utilisateurs.password='".$row['password']."'";
				   $result = mysqli_query($connexion, $query);
				}
				header("Location: index.php");
			}
	             
	   
	}
?>
