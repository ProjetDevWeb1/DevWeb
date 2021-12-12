
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Devweb/src/views/css/Acceuil.css" />
  <title> Adopte1Abeille</title>
</head>

<body>
  <header>
    <div class="logo1">
      <img src="/Devweb/src/views/css/bannieres/logo.png" alt="logo" />
      <h2 class="logo"> <a href='/DevWeb/index.php?route=post&action=read' alt='Broken Link'> Adopte1Abeille </a> </h2>
    </div>
  </header>
  <main>
	<div id="produits">
      <form action="/DevWeb/index.php?route=post&action=create" method="post">
            <div class="style_form">
              <div class="mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom">
              </div>

              <div class="mb-4">
                  <label for="type" class="form-label">Type</label>
                  <select name="type" id="type">
                      <option value="">--Choisissez un type--</option>
                      <option value="reine">Reine</option>
                      <option value="charpentiere">Charpentière</option>
                      <option value="gardienne">Gardienne</option>
                      <option value="butineuse">Butineuse</option>
                  </select>
              </div>
              <div class="mb-5">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" id="description" name="description" rows="5" cols="100"></textarea>
              </div>
              <div class="col-auto">
                  <button type="submit" value="submit">Send</button>
              </div>
            </div>
      </form>
       
	</div>
</main>
	<footer>
		<div class="footer">
			<div class="info">
				<ul>
					<li>
						<h1>Contact </h1>
						<ul>
							<li>Mail : contact@glc.com</li>
							<li>Service client : +33(0)778404167</li>
							<li>37 Rue Rouget De Lisle, 92310 Issy-les-Moulineaux</li>
						</ul>
					</li>
				</ul>
				<br>
				<h6>© Teyabeille</h6>
			</div>
	</footer>
</body>
</html>
