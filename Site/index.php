<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Site de Jean Forteroche</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta name="description" content="" />
  <link rel="stylesheet" href="css/style.css" lang="fr" />
  <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>

<!--l'en tête-->
<?php include("header.php");?>
<!-- le corps -->

<body>
  <article id="about" class="row">
    <div class="col-12" id="conteneur">
      <h1>A propos de l'auteur </h1>
      <div class="col-sm-6 col-md-5 col-lg-4" id="photo"><img src="images/dmitry-ratushny-412448-unsplash.jpg" alt="Photo de Jean Forteroche"></div>
      <div class="col-sm-6 col-md-7 col-lg-8" id="texteAPropos">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. Curabitur feugiat quam sit amet varius lobortis. </p>
        <button type="button" class="btn btn-primary ">Plus d'info</button>
      </div>
    </div>
  </article>
  <article id="mainTitles" class="row">
    <div class="col-12" id="conteneur">
      <h1>Principaux titres</h1>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover1.jpg" alt="couverture du livre Wall street"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover2.jpg" alt="couverture du livre Une maison dans le ciel"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover3.jpg" alt="couverture du livre C'est là que le couteux tombe"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover4.png" alt="Sur le pouvoir et l'idéologie"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover5.jpg" alt="couverture du livre 1000 parapluies noirs"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="images/cover6.jpg" alt="couverture du livre Et puis il y a ça"></a></div>
    </div>
  </article>
  <article id="extracts" class="row">
    <div class="col-12" id="conteneur">
      <h1>Billet simple pour l'Alaska </h1>
      <div class="col-sm-6 col-md-7 col-lg-8" id="texteAPropos">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. Curabitur feugiat quam sit amet varius lobortis. </p>
        <button type="button" class="btn btn-primary">Lire la suite</button>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4" id="photo"><img src="images/aurora-borealis-3715416.jpg" alt="Photo de couverture du livre billet simple pour l'Alaska"></div>
    </div>
  </article>
  <article id="comments" class="row">
    <div class="col-12" id="conteneur">
      <h1>Avis</h1>
      <!--récupération et affichage des messages -->
      <?php 
                try
                {
                    $bdd = new PDO('mysql:host=91.216.107.164;dbname=slash1040766_1oujev;charset=utf8','slash1040766', 'xlsvcq1f3c');
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());      
                }
                $reponse = $bdd->query('SELECT autor, comment, DAY(dateComment) AS day , MONTH(dateComment)AS month, YEAR(dateComment)AS year from comments ORDER BY ID DESC LIMIT 0,5');

                while($donnees=$reponse->fetch())

                {                   
                    echo'<div class="col-sm-12 col-md-6 col-lg-3" class="Avis"><p> le : '.htmlspecialchars($donnees['day']).'/'.htmlspecialchars($donnees['month']).'/'.htmlspecialchars($donnees['year']).',<strong> '.htmlspecialchars($donnees['autor']).'</strong> a écrit : '.htmlspecialchars($donnees['comment']).'</p><hr/></div>';
                }
                $reponse->closeCursor();
                ?>
      <a href="http://jeanforteroche.slashcreations.fr/comments.php"><button type="button" class="btn btn-primary">Laisser un avis</button></a>
    </div>
  </article>
</body>
<!--le pied de page-->

</html>
