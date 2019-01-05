<?php $title = 'Billet simple pour l\'alaska';?>


<!-- le corps -->

<?php ob_start(); ?>
<div id="backChapter">
  <div id="front">
    <article id="extracts" class="row">
      <div class="col-12" id="conteneur">
        <h1>Billet simple pour l'Alaska </h1>
        <div id="title">
          <h3>chapitre :
            <?= $post['id'] ?> -
            <?=htmlspecialchars($post['title'])?>
            -</h3>
        </div>
        <p>
          <?=nl2br(htmlspecialchars($post['content']))?><br /><br />
        </p>

      </div>
    </article>
    <article id="comments" class="row">
      <div class="col-12" id="conteneur">
        <h1>Avis</h1>
        récupération et affichage des messages
      </div>
    </article>
  </div>
  <div id="nav">
    <h4>Accéder aux autres chapitres :</h4>

    <div class="othersChapter">
      <p>
        <?php
  $i=1;
            while ($i<=$len['COUNT(id)'])
            {
        ?><a class="btn btn-primary" href="./index.php?action=others&&id=<?=$i ?>" role="button">Chapitre
          <?=$i?></a>
        <?php $i++;}?>
      </p>
    </div>

  </div>
</div>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
