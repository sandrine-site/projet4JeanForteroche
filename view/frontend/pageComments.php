<!-- titre de la page -->
<?php $title = 'Billet simple pour l\'alaska : commentaires';?>

<?php ob_start(); ?>
<div id="backComments">
  <div id="frontComments">
    <!-- les avis-->
    <article id="list" class="row">
      <div class="col-12" id="conteneur">

        <?php
         if (isset ($_GET['id_chapter'])){$number= $_GET['id_chapter'];
          ?>
        <h4>Merci de nous avoir indiqué ce message, nous allons le lire avec attention.</h4>
        <?php }
          else{$number= $_GET['id'];}
          ?>
        <h1>Les avis sur le chapitre :
          <?=$number ?>
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
          <a class="btn btn-secondary" href="./index.php?action=signalComment&&id=<?=$comment['id'] ?>&&id_chapter=<?=$_GET['id'] ?>"><em>signaler ce commentaire</em></a>
        </div>
        <?php
        }
          $comments->closeCursor();
        ?>
      </div>
    </article>

    <article id="letComment" class="row">
      <h1>Laisser un avis </h1>
      <form action="./index.php?action=addComment&amp;id_chapter=<?=$_GET['id']?> " method="post">
        <div class="col-12">
          <textarea id="comment" name="comment" rows="10" cols="60"></textarea>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <label for="author">
            <h4> Auteur</h4>
          </label><br />
          <input type="text" id="author" name="author" />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          <input type="submit" value="Envoyer" />
        </div>
      </form>
    </article>
  </div>
</div>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
