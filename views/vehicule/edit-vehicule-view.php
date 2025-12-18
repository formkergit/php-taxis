<?php 
$titleTaxis = "Edition d'un vehicule";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Editer un vehicule</h1>
        <form action="?id=<?= $vehicule['id_vehicule']; ?>" method="POST">
            <div>
                <label for="marque">Marque</label>
                <input type="text" name="marque" value="<?= $vehicule['marque']; ?>"  required>
            </div>
             <div>
                <label for="modele">Modele</label>
                <input type="text" name="modele" value="<?= $vehicule['modele']; ?>" required>
            </div>
            <div>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" value="<?= $vehicule['couleur']; ?>" required>
            </div>    
            <div>
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" value="<?= $vehicule['immatriculation']; ?>"  required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Editer vehicule</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>