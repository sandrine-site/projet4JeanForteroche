<?php $title = 'Mot de Passe';?>

<?php ob_start(); ?>
 <div id ="administration">   
        <h2>Pour entrer dans l'interface d'administration, veuillez saisir votre nom et votre mot de passe </h2>
            <form action="./index.php?action=interfaceAdmin" method="post">
                <div>
                    <div class="warning"><?php echo ($message)?></div>
                    <label for="Name">
                        <p>Nom :</p>
                    </label>
                    
                    <input title="texte" name="Name"/></div>
                <div><label for="Password">
                    <p>Mot de passe :</p>
                    </label>
                    <input title="texte" name="Password"/></div>

                <input type="submit" value="Envoyé"/>
            </form>
        </div>
   <?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>