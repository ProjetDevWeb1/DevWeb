<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Devweb/src/views/css/Acceuil.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
  <title>Adopte1Abeille</title>
</head>

<body>
  <header>
    <div class="logo1">
      <img src="/Devweb/src/views/css/bannieres/logo.png" alt="logo" />
      <h2 class="logo"> <a href='/DevWeb/index.php' alt='Broken Link'> Adopte1Abeille </a> </h2>
    </div>
  </header>
  <div class="gif">
            <img src="/Devweb/src/views/css/bannieres/gif.gif" alt="gif abeille" />
            </div>
  <div id="produits">
    <section class="presentation">
      <div class="introduction">
        <div class="intro-text">
            <pre> Liste des abeilles : </pre>
          </div>
            <table class="table">
                <tbody>
                    <?php foreach($bees  as $bee) :?>
                        <tr>
                            <td><?= $bee['nom']?></td>
                            <td><?= $bee['type']?></td>
                            <td><?= $bee['Description']?></td>
                            <td> <button type="button" class="btn btn-outline-warning"><a href='/DevWeb/index.php?route=post&action=delete&id=<?= $bee['id']?>' alt='Broken Link'>Delete</a></button> </td>
                            <td> <button type="button" class="btn btn-outline-warning"><a href='/DevWeb/index.php?route=post&action=getUpdate&id=<?= $bee['id']?>' alt='Broken Link'>Update</a></button> </td>
                          </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-warning btn-lg btn-block"><a href='/DevWeb/src/views/create.php' alt='Broken Link'>Create</a></button>
        </br>
        </section>
      </div>
    </div>
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
