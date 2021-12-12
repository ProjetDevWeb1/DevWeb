
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
<div class="row">
    <div class="col-12">
        <form action="index.php?route=post&action=update&id=<?= $_REQUEST['id']?>" method="post">
            <div class="mb-3">
                <label for="newName" class="form-label">Nouveau nom</label>
                <input type="text" name="newName" class="form-control" id="newName" value='<?= $bee["nom"] ?>'>
            </div>

            <div class="mb-3">
                <label for="newType" class="form-label">Nouveau type</label>
                <select name="newType" id="newType">
                    <option value="">--Choisissez un type--</option>
                    <option value="reine" <?= ($bee["type"] == "reine") ? "selected" : "" ?>>Reine</option>
                    <option value="charpentiere" <?= ($bee["type"] == "charpentiere") ? "selected" : ""?>>Charpentière</option>
                    <option value="gardienne" <?= ($bee["type"] == "gardienne") ? "selected" : ""?>>Gardienne</option>
                    <option value="butineuse" <?= ($bee["type"] == "butineuse") ? "selected" : ""?>>Butineuse</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="newDesc" class="form-label">Nouvelle description</label>
                <textarea type="text" id="newDesc" name="newDesc" rows="5" cols="100" style="resize:none"><?= $bee["Description"] ?></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" value="submit">Valider les changements</button>
            </div>
        </form>
    </div>
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
