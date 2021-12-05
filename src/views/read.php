<!DOCTYPE html>
<html>

    <head>
        <title>Liste abeilles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class = "container">
            <h1> Liste des abeilles : </h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">type</th>
                    <th scope="col">Description</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($bees  as $bee) :?>
                        <tr>
                            <td><?= $bee['nom']?></td>
                            <td><?= $bee['type']?></td>
                            <td><?= $bee['description']?></td>
                            <td> <button><a href='/DevWeb/index.php?route=post&action=delete&id=<?= $bee['id']?>' alt='Broken Link'>Delete</a></button> </td>
                            <td> <button><a href='/DevWeb/update.php?id=<?= $bee['id']?>' alt='Broken Link'>Update</a></button> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <td> <button><a href='/DevWeb/create.php' alt='Broken Link'>Create</a></button> </td>
        </br>


    </body>

</html>
