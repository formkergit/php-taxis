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
        <h1>Editer un conducteur</h1>
        <form action="?id=<?= $conducteur['id_conducteur']; ?>" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $conducteur['nom']; ?>"  required>
            </div>
             <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="<?= $conducteur['prenom']; ?>" required>
            </div>
            <div>
                <button type="submit" name="envoyer">Editer conducteur</button>
            </div>               
        </form>
    </main>
</body>
</html>