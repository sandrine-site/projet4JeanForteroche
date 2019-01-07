<!--        titre de la page -->
<?php $title = 'Site de Jean Forteroche';?>


<?php ob_start(); ?>

<div id=back>
  <!--       Annimation oiseaux -->
  <div id="bird1"></div>
  <div id="bird2"></div>
  <div id="bird3"></div>
  <div id="bird4"></div>
  <div id="bird5"></div>

  <div id=front>
    <!--Article à propos de l'auteur -->
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
    <!--Article principaix titres -->
    <article id="mainTitles" class="row">
      <div class="col-12" id="conteneur">
        <h1>Principaux titres</h1>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover1.jpg" alt="couverture du livre Wall street" />
          <figcaption>
            <h4>Wall Street</h4>
            <p>Argent,
              <br /> courbes ascendantes et inversement,
              <br />arnaqueurs,
              <br />partenaires,
              <br />buildings,
              <br />bourse.
              <br />Burn-out.</p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover2.jpg" alt="couverture du livre Une maison dans le ciel" />
          <figcaption>
            <h4>Une maison dans le ciel</h4>
            <p>Après un énième virage dans les cieux, elle apparut, soudainement, subitement, au creux de plusieurs nuages effilés : une maison, une véritable bâtisse, que les pilotes du ballon s’empressèrent d'explorer.</p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover3.jpg" alt="couverture du livre C'est là que le couteux tombe" />
          <figcaption>
            <h4>C'est là que le couteau tombe</h4>
            <p>Un lieu clôt.
              <br />Des personnages suspects.
              <br />Un inspecteur déboussolé,
              <br />dans un univers où les erreurs ne sont plus permises. </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover4.png" alt="Sur le pouvoir et l'idéologie" />
          <figcaption>
            <h4>Sur le pouvoir et l'idéologie</h4>
            <p>2034, le drapeau Nazis flotte sur la lune, l'allemand est langue première dans toutes les écoles d'Europe. La monarchie n'a jamais été abolie dans l'hexagone.
              Et si l'histoire que vous aviez connue n'était plus que songe ? </p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover5.jpg" alt="couverture du livre 1000 parapluies noirs" />
          <figcaption>
            <h4>1000 parapluies noirs</h4>
            <p>1 parapluie.
              <br /> 2 parapluies.
              <br />3 parapluies.
              <br />1000 parapluies, et toujours pas protégée de l'orage qui tourmentait son esprit.</p>
          </figcaption>
        </figure>
        <figure class="col-sm-6 col-md-4 col-lg-2" id="photo"><img src="./public/images/cover6.jpg" alt="couverture du livre Et puis il y a ça">
          <figcaption>
            <h4>Et puis il y a ça</h4>
            <p>En cherchant sur Google de quoi compléter leur exposé sur les sorcières, Taissa et Emilie étaient loin de se douter sur quoi elles allaient tomber. </p>
          </figcaption>
        </figure>
      </div>
    </article>
    <!--Article billet simple pour l'Alaska -->
    <article id="extracts" class="row">
      <div class="col-12" id="conteneur">
        <h1>Billet simple pour l'Alaska </h1>
        <div id="title">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac nisl maximus, placerat erat nec, sodales ex. Aliquam nec faucibus leo, at pretium diam. Etiam feugiat, ligula non tincidunt placerat, magna urna lobortis nunc, a volutpat ex magna nec sapien. Quisque sed aliquam ex. Nulla a purus in lacus faucibus laoreet. Nunc magna nisi, elementum condimentum mi in, pretium semper velit. Donec ac tortor vel magna commodo mattis quis at risus. Sed non felis diam. Cras ut laoreet mauris, non scelerisque ex. Integer tincidunt scelerisque augue nec laoreet. Sed et lectus elit. Mauris nunc massa, venenatis ultrices augue et, lacinia. </p>
          <h3>
            chapitre :
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
    <!--Article derniers avis -->
    <article id="comments">
      <div class="col-12" id="conteneur">
        <h1>
          Les derniers avis sur le chapitre :
          <?=$post['id']?>
        </h1>
        <div class="row">
          <?php
            $i=1;
            while ($comment = $comments->fetch())
            {
              if ($i<=4)
              {
          ?>
          <div class="col-sm-12 col-md-6 col-lg-3" class="Avis">
            <p>
              <?= nl2br(htmlspecialchars($comment['comment'])) ?>
              <br />
              <br />
              le :
              <?= $comment['DateComment_fr'] ?>
              <h4>
                <?= htmlspecialchars($comment['author']) ?>
              </h4>
          </div>
          <?php
          $i++; 
              }
            }
            $comments->closeCursor();
          ?>
        </div>
      </div>
      <div class="row">
        <a class="btn btn-primary" href="./index.php?action=comments&&id=<?=$post['id'] ?>" role="button">Tous les avis/Laisser un avis</a>
      </div>
    </article>
  </div>
</div>
<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
