<!DOCTYPE html>



<html lang="fr">
    <head>
        <title>Site de Jean Forteroche</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" lang="fr" /> 
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    </head>
    <body>
        <div id="administration">  
           <?php 
            if (isset($_POST['Password']) AND $_POST['Password']=='@cCq37!C+')
            {
            ?>
            <h2>Bienvenue dans l'interface d'administration de votre site ici vous pouvez:</h2>
            <h2> Créer ou éditer un billet ou modérer les avis laissés par les internautes</h2>
            <div id="subtitle">
                <p>Désirez-vous créer ou éditer un billet ou moderer les avis ?</p>
            </div>
            <form class="choice" action="admin_post.php" method="post" >
                <div id="completForm">
                    <div class="choice">
                        <input type="radio" name="billet" value="create" id="create"/>
                        <label for="create">Créer/Editer un billet</label>
                    </div>
                    <div class="choice">
                        <input type="radio" name="billet" value="moderate" id="moderate" />
                        <label for="moderate">Modérer</label>
                        <p>Veuillez entrer les dates de début et fin de modération.</p>
                        <div id=date>
                            <label for="dateDepart">Du:</label>
                            <input type="date" name="dateDepart" placeholder="jj/mm/AAAA"/>
                        </div>
                        <div id=date>
                            <label for="dateFin">au:</label>
                            <input type="date" name="dateFin" placeholder="jj/mm/AAAA"/>
                        </div>
                    </div>  
                </div>  
                <input class="choice" type="submit" value="Envoyé"/>
            </form>
            <?php
            }
            else
            {
            echo '<h2> mot de passe incorect !</h2>';
            include("admin.php");
            }
            ?>
        </div>
    </body>
</html>
    
