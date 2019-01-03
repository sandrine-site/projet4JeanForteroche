<!--récupération des avis -->
<?php 
try
{
	$bdd = new PDO('mysql:host=91.216.107.164;dbname=slash1040766_1oujev;charset=utf8','slash1040766', 'xlsvcq1f3c');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());      
}
$reponse = $bdd->query('SELECT autor, comment, DAY(dateComment) AS day , MONTH(dateComment)AS month, YEAR(dateComment)AS year from comments ORDER BY ID DESC LIMIT 0,25 ');
?>

<!--affichage des avis -->
<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Site de Jean Forteroche</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="css/style.css" lang="fr" />
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
    <!--l'en tête-->
    <?php include("header.php");?>
    <!-- le corps -->
    <body>
        <article id="list" class="row">
            <div class="col-12" id="conteneur">
                <h1>Les précedents avis </h1>
			<?php
            while($donnees=$reponse->fetch())
            {
                echo'<div class="col-sm-12 col-md-6 col-lg-3"class="comments"><p> le : '.htmlspecialchars($donnees['day']).'/'.htmlspecialchars($donnees['month']).'/'.htmlspecialchars($donnees['year']).',<strong> '.htmlspecialchars($donnees['autor']).'</strong> a écrit : '.htmlspecialchars($donnees['comment']).'</p><hr/></div>';
            }
            $reponse->closeCursor();
            ?>
    <!--Saisie d'un avis -->
            </div>
        </article>
        <article id="Comment" class="row">
            <div class="col-12" id="conteneur">
                <div class="col-sm-12 col-md-6 col-lg-6" class="letComment">
                    <h1>Laisser un avis </h1>
                    <form action="comments_post.php" method="post" >
                        <div class="col-12" >
                            <textarea title="texte" name="comment" rows="8" cols="56"></textarea>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" >
                            <p> Auteur</p>
                            <input title="texte" name="autor" />
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6" >
                            <input type="submit" value="Envoyé"/>
                            <?php if ($_GET['message']!='')
							echo $_GET['message']?>
                        </div>
                    </form>
                </div>
            </div>
    <!--Signalement d'un avis -->
            <div class="col-sm-12 col-md-12 col-lg-6" class="signalComment">
                <h1>Signaler un avis </h1>
                <form action="signal_post.php" method="post" >
                   <p> Pour signaler un avis veuillez indiquer les réferences de cet avis</p>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p> Avis parut le:</p>
                        <input title="date" name="refDate" />
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p> Auteur</p>
                        <input title="texte" name="refName" placeholder="jj/mm/aaaa"/>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <input type="submit" value="Envoyé"/>
                    </div> 
                </form>
            </div>
        </article>  
    </body>
    <!--le pied de page-->
</html>
    
