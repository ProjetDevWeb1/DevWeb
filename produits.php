<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css.css">
<head>
	<title>Produits</title>
	<meta charset="utf-8">
</head>
<body>
	<div id="page">
		<header>
		<ul>
			<li class="Menu" style="text-align: left"> <a href="main.html" class="logo" id="logoMenu"> <img src="more.png" alt="logo menu"> </a>
				<ul class="sous-menu"> 
					<li> Qui sommes-nous ? </li> 
					<li> Nous contacter </li>
					<li> Conditions générales </li>
					<li> se connecter ? (opt rédiger des notes jsp...) </li>
				</ul>
			</li>
			<li style="text-align: center"> <a href="#" class="logo"> <img src="swarm.png" alt="logo site" height="40px"> </a> </li>
			<li style="text-align: right;"> lien wiki </li>
		</ul>
	</header>
	<div id="produits">
		<table align="center">
		<form method="GET" action="panier.php">
		<?php
			$db = "abeille";
			$user = "katia";
			$mdp = "katia";

			//$pdo = new mysqli("localhost",$user, $mdp, $db);
		?>
		<tr>
			<th> <label for="nom">Nom</label> </th>
			<th> <label for="type">Type</label>  </th>
			<th> <label for="prix">Prix à l'achat</label> </th>
		</tr>
		<tr>
			<td style="text-align: center"><input type="text" name="nom" id="nom"></td>
			<td style="text-align: center"><input type="text" name="type" id="type"></td>
			<td style="text-align: center"><input type="int" name="prix" id="prix"></td>
		</tr>
		<tr>
			<th> <label for="histoire">La petite histoire...</label> </th>
		</tr>
		<tr>
			<td colspan="3"> <textarea name="histoire" id="histoire" cols="80" rows="10"> </textarea> </td>
		</tr>
		<tr>
			<td> <label for="photo">Photo : </label> </td>
			<td> <input type="file" name="photo" id="photo"> </td>
		</tr>
		</form>
		</table>

		<?php 
			$pdo = new PDO("mysql:localhost; dbname:abeille", "root", "root");
			if (isset($_GET["envoyer"])) {
				$name = $_GET["nom"];
				$type = $_GET["type"];
				$prix = $_GET["prix"];
				$histoire = $_GET["histoire"];
				$photo = $_GET["photo"];

				$sql = "INSERT INTO abeilles (nom, type, prix, histoire, photo) VALUES (\"$name\", \"$type\", $prix, \"$histoire\", $photo);";

				if ($res) {
					echo "<tr><td colspan=\"3\" style=\"text-align: center\">Nous souhaitons la bienvenue à votre abeille !!</td></tr>";
				}
				else{
					echo "<tr><td colspan=\"3\" style=\"text-align: center\">Erreur : veuillez réessayer</td></tr>";
				}

			}
			

		?>

	</div>
	<footer>
		<table class="footer" border="1" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" width="33.33%"><a href="#">Qui sommes-nous ?</a></td>
				<td align="center" width="33.33%"><a href="#">Nous contacter</a></td>
				<td align="right" width="33.33%"><a href="#">Conditions générales</a></td>
			</tr>
		</table>
		</footer>

	</div>
</body>
</html>