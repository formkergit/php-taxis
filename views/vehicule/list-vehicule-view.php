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
                    <td><a href="">Edit</a> <a href="">Supprimer</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>