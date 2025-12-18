<?php 
$titleTaxis = "Ajout d'un vehicule";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Ajouter un vehicule</h1>
        <form action="" method="POST">
            <div>
                <label for="marque">Marque</label>
                <input type="text" name="marque" required>
            </div>
             <div>
                <label for="modele">Modele</label>
                <input type="text" name="modele" required>
            </div>
            <div>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" required>
            </div>    
            <div>
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Ajouter vehicule</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>