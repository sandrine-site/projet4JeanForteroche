<?php $title = 'Site de Jean Forteroche';?>


<!-- le corps -->

<?php ob_start(); ?>
<div id=back>
  <div id="bird1"></div>
  <div id="bird2"></div>
  <div id="bird3"></div>
  <div id="bird4"></div>
  <div id="bird5"></div>
  <div id=front>
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
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover1.jpg" alt="couverture du livre Wall street" />
          <figcaption>
            <h4>Wall Street</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover2.jpg" alt="couverture du livre Une maison dans le ciel" />
          <figcaption>
            <h4>Une maison dans le ciel</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover3.jpg" alt="couverture du livre C'est là que le couteux tombe" />
          <figcaption>
            <h4>C'est là que le couteau tombe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover4.png" alt="Sur le pouvoir et l'idéologie" />
          <figcaption>
            <h4>Sur le pouvoir et l'idéologie</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover5.jpg" alt="couverture du livre 1000 parapluies noirs" />
          <figcaption>
            <h4>1000 parapluies noirs</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>

        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover6.jpg" alt="couverture du livre Et puis il y a ça">
          <figcaption>
            <h4>Et puis il y a ça</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a sodales lectus. Ut eu risus luctus, pellentesque est pretium, ultrices dolor. Vivamus quis ultrices dui, nec euismod elit. Donec nec iaculis turpis. Phasellus sed diam sit amet tellus pulvinar bibendum a at est. Praesent ac leo nec magna vulputate commodo. </p>
          </figcaption>
        </figure>
      </div>
    </article>
    <article id="extracts" class="row">
      <div class="col-12" id="conteneur">
        <h1>Billet simple pour l'Alaska </h1>
        <div id="title">
          <h3>chapitre :
            <?= $post['id'] ?> -
            <?=htmlspecialchars($post['title'])?>
          </h3>
        </div>
        <div class="col-sm-6 col-md-7 col-lg-8" id="texteAPropos">
          <p>
            <?=nl2br(htmlspecialchars($post['content']))?><br /><br />
          </p>
          <a class="btn btn-primary" href="./index.php?action=others&&id=<?=$post['id'] ?>" role="button">Lire la suite</a>
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
  </div>
</div>
<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
