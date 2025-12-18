<?php 
$titleTaxis = "Edition d'un conducteur";
require PATH_PROJET . '/views/partials/header.php'; ?>
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
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>