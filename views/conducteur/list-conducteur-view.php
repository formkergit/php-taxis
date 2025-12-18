<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conducteurs</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main class="container">
    <?php
            if (count($conducteurArray) === 0 ) :
                echo '<h3>Aucun conducteur !</h3>';
                echo '<a href="'.  WEB_ROOT . '/conducteur/add-conducteur.php" role="button">Ajouter un conducteur</a>';
                die();
            endif;
    ?>
    <h1>Liste des conducteurs</h1>
    <a href="<?= WEB_ROOT . '/conducteur/add-conducteur.php' ?>" role="button">Ajouter un conducteur</a>
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conducteurArray as $conducteur) : ?>
                <tr>
                    <td><?= $conducteur['id_conducteur']; ?></td>
                    <td><?= $conducteur['nom']; ?></td>
                    <td><?= $conducteur['prenom']; ?></td>
                    <td>
                        <a href="<?= WEB_ROOT . '/conducteur/edit-conducteur.php?id=' . $car['id_conducteur'] ?>" role="button">Edit</a> 
                    <a href="<?= WEB_ROOT . '/conducteur/del-conducteur.php?id=' . $car['id_conducteur'] ?>" role="button" onclick="return confirm('Etes vous certain de vouloir supprimer ce conducteur ?');">Supprimer</a>
                </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</main>
</html>