<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main class="container">
    <?php
            if (count($vehiculeArray) === 0 ) :
                echo '<h3>Aucun vehicule !</h3>';
                echo '<a href="'.  WEB_ROOT . '/vehicule/add-vehicule.php" role="button">Ajouter un vehicule</a>';
                die();
            endif;
    ?>
    <h1>Liste des vehicules</h1>
    <table>
        <thead>
            <tr>
            <th>Marque</th>
            <th>Modele</th>
            <th>Couleur</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculeArray as $car) : ?>
                <tr>
                    <td><?= $car['marque']; ?></td>
                    <td><?= $car['modele']; ?></td>
                    <td><?= $car['couleur']; ?></td>
                    <td>
                        <a href="<?= WEB_ROOT . '/vehicule/edit-vehicule.php?id=' . $car['id_vehicule'] ?>" role="button">Edit</a> 
                    <a href="<?= WEB_ROOT . '/vehicule/del-vehicule.php?id=' . $car['id_vehicule'] ?>" role="button" onclick="return confirm('Etes vous certain de vouloir supprimer ce vehicule ?');">Supprimer</a>
                </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</main>
</html>