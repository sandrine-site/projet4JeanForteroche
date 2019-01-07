<!--titre de la page -->
<?php $title = 'Billet simple pour l\'alaska';?>

<?php ob_start(); ?>
<div id="backChapter">
  <div id="frontChapter">
    <!-- chapitre -->
    <article id="chapter" class="row">
      <div class="col-12" id="conteneur">
        <h1>Billet simple pour l'Alaska </h1>
        <div id="title">
          <h3>
            chapitre :
            <?= $post['id'] ?> -
            <?=htmlspecialchars($post['title'])?>
            -
          </h3>
        </div>
        <p>
          <?=nl2br(htmlspecialchars($post['content']))?><br /><br />
        </p>
      </div>
    </article>
    <!-- commentaires -->
    <article id="comments">
      <div class="row">
        <div class="col-12" id="conteneur">
          <h1>
            Les derniers avis sur le chapitre :
            <?=$post['id']?>
          </h1>
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
  <!-- accés aux autre chapitres -->
  <div id="nav">
    <h4>Accéder aux autres chapitres :</h4>
    <div class="othersChapter">
      <p>
        <?php
          $i=1;
          while ($i<=$len['COUNT(id)'])
          {
        ?>
        <a class="btn btn-primary" href="./index.php?action=others&&id=<?=$i ?>" role="button">
          Chapitre
          <?=$i?>
        </a>
        <?php
          $i++;
          }
        ?>
      </p>
    </div>
  </div>
</div>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
