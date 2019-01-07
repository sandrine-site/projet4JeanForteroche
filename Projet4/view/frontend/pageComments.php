<!-- titre de la page -->
<?php $title = 'Billet simple pour l\'alaska : commentaires';?>

<?php ob_start(); ?>
<div id="backComments">
  <div id="frontComments">
    <!-- les avis-->
    <article id="list" class="row">
      <div class="col-12" id="conteneur">
        <h1>
          Les avis sur le chapitre :
          <?=$_GET['id'] ?>
        </h1>
        <?php
        while ($comment = $comments->fetch())
        {
        ?>
        <div class="col-sm-12 col-md-6 col-lg-3" class="Avis">
          <p>
            <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            <br />
            le :
            <?= $comment['DateComment_fr'] ?>
          </p>
          <h4>
            <?= htmlspecialchars($comment['author']) ?>
          </h4>
        </div>
        <?php
        }
        $comments->closeCursor();
        ?>
      </div>
    </article>

    <article id="Comment" class="row">
      <div class="col-12" id="conteneur">
        <div class="col-sm-12 col-md-6 col-lg-6" class="letComment">
          <h1>Laisser un avis </h1>
          <form action="comments_post.php" method="post">
            <div class="col-12">
              <textarea title="texte" name="comment" rows="8" cols="56"></textarea>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <p> Auteur</p>
              <input title="texte" name="autor" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <input type="submit" value="Envoyé" />
            </div>
          </form>
        </div>
      </div>
      <!--Signalement d'un avis -->
      <div class="col-sm-12 col-md-12 col-lg-6" class="signalComment">
        <h1>Signaler un avis </h1>
        <form action="signal_post.php" method="post">
          <p> Pour signaler un avis veuillez indiquer les réferences de cet avis</p>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <p> Avis parut le:</p>
            <input title="date" name="refDate" placeholder="jj/mm/aaaa" />
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <p> Auteur</p>
            <input title="texte" name="refName" />
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <input type="submit" value="Envoyé" />
          </div>
        </form>
      </div>
    </article>
  </div>
</div>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
