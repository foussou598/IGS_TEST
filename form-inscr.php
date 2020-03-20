
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>inscripn</title>
<link rel="stylesheet" href="inscription.css" />
</head>
<body>
<?php include"db.php";?>
<div class="form">
<h1>Inscription</h1>
<form name="inscription" action="inscription.php" method="post">
<input type="text" name="pseudo" placeholder="Entrer pseudo" required />
<input type="password" name="mot_pass" placeholder="mot de passe" required />
<input type="password" name="confirmation" placeholder="confimation" required />
<input type="submit" name="submit" value="INSCRIPTION" />
</form>


<p>Déjà inscrit? <a href='connexion.php'>Connectez-vous</a></p>
    
</div>
</body>
</html>

