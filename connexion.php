<?php 

require_once('includes/menu.php');
?>
<br><br><br><br><br><br><br><br><br>
<?php 

$connexion=mysqli_connect("localhost","root","","camping");
?>
<!DOCTYPE html>
<html lang="fr">
                    <div class="logo">
                            <img src="images/easytime.png" alt="logo">
                        </div>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion<h1>
        <br><br>
    <form  method="POST" action="">
                <div class="formulaireconnexion">

    
<label for="login">Login :<br> </label>
					<input type="text" name="login" id="login" required>

					<br>
					<br>

					<label for="password">Mot de passe :<br></label>
                    <input type="password" name="password" id="password" required>

                    <br>
                    <br>
                    
                    <input type="submit" value="connexion" name="confirm" /><br>

                </div>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['confirm']))
    {
        $login = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['login']));
        $password = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['password']));
        $result = mysqli_fetch_all(mysqli_query($connexion, "SELECT password FROM utilisateurs WHERE login = '$login' "));
        $cryptedpassword = $result[0][0];
        $checkpass = password_verify($password, $cryptedpassword);
        if($checkpass == true)
        {
            $result = mysqli_fetch_all(mysqli_query($connexion, "SELECT id FROM utilisateurs WHERE login = '$login' "));
            $id = $result[0][0];
            $_SESSION['id'] = $id;
            header('Location: profil.php');
        }
        else
        {
            echo "Mot de passe invalide";
        }
    }





