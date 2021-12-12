
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
					<li> Voir nos abeilles </li>
					<li> Adopter une abeille </li>
					<li> Qui sommes-nous ? </li> 
					<li> Nous contacter </li>
				</ul>
			</li>
			<li style="text-align: center"> <a href="#" class="logo"> <img src="swarm.png" alt="logo site" height="40px"> </a> </li>
			<li style="text-align: right;"> KTV </li>
		</ul>
	</header>
	<div id="produits">
		<table align="center">
		<form action="index.php?route=post&action=create" method="post">
		<tr>
			<th> <label for="nom">Nom</label> </th>
			<th> <label for="type">Type</label>
            </th>
			<th> <label for="prix">Prix à l'achat</label> </th>
		</tr>
		<tr>
			<td style="text-align: center"><input type="text" name="nom" id="nom"></td>
			<td style="text-align: center"> <select name="type" id="type">
                    <option value="">--Choisissez un type--</option>
                    <option value="reine">Reine</option>
                    <option value="charpentiere">Charpentière</option>
                    <option value="gardienne">Gardienne</option>
                    <option value="butineuse">Butineuse</option>
                </select> </td>
			<td style="text-align: center"><input type="int" name="prix" id="prix"></td>
		</tr>
		<tr>
			<th colspan="3"> <label for="description" class="form-label">La petite histoire...</label>
            </th>
		</tr>
		<tr>
			<td colspan="3"> <textarea type="text" id="description" name="description" rows="10" cols="70"></textarea> </td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center"> <input type="button" name="Envoyer" id="envoyer" value="Envoyer"> </td>
		</tr>
		</form>
		</table>
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