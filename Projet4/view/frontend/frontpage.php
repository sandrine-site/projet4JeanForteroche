<?php $title = 'Site de Jean Forteroche';?>


<!-- le corps -->

<?php ob_start(); ?>

<body>
  <article id="about" class="row">
    <div class="col-12" id="conteneur">
      <h1>A propos de l'auteur </h1>
      <div class="col-sm-6 col-md-5 col-lg-4" id="photo"><img src="./public/images/dmitry-ratushny-412448-unsplash.jpg" alt="Photo de Jean Forteroche"></div>
      <div class="col-sm-6 col-md-7 col-lg-8" id="texteAPropos">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. Curabitur feugiat quam sit amet varius lobortis. </p>
        <button type="button" class="btn btn-primary ">Plus d'info</button>
      </div>
    </div>
  </article>
  <article id="mainTitles" class="row">
    <div class="col-12" id="conteneur">
      <h1>Principaux titres</h1>
      <p>Pour voir le résumé du livre cliquer sur la couverture</p>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover1.jpg" alt="couverture du livre Wall street"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover2.jpg" alt="couverture du livre Une maison dans le ciel"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover3.jpg" alt="couverture du livre C'est là que le couteux tombe"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover4.png" alt="Sur le pouvoir et l'idéologie"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover5.jpg" alt="couverture du livre 1000 parapluies noirs"></a></div>
      <div class="col-sm-6 col-md-4 col-lg-2" id="photo"><a href="#"><img src="./public/images/cover6.jpg" alt="couverture du livre Et puis il y a ça"></a></div>
    </div>
  </article>
  <article id="extracts" class="row">
    <div class="col-12" id="conteneur">
      <h1>Billet simple pour l'Alaska </h1>
      <div id="title">
        <h3>chapitre
          <?= $post['id'] ?>
        </h3>
        <p>
          <?=htmlspecialchars($post['title'])?>
        </p>
      </div>
      <div class="col-sm-6 col-md-7 col-lg-8" id="texteAPropos">
        <p>
          <?=nl2br(htmlspecialchars($post['content']))?>
        </p>
        <button type="button" class="btn btn-primary">Lire un autre chapitre</button>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4" id="photo"><img src="./public/images/aurora-borealis-3715416.jpg" alt="Photo de couverture du livre billet simple pour l'Alaska"></div>
    </div>
  </article>
  <article id="comments" class="row">
    <div class="col-12" id="conteneur">
      <h1>Avis</h1>
      récupération et affichage des messages



    </div>
  </article>
</body>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
