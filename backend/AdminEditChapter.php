<!--titre de la page -->
<?php $title = 'Administration des chapitres';?>

<?php ob_start(); ?>
<div id="administrationChapter">
    <article id="create">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3> Créer/Editer un chapitre : </h3>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">

            <a class="btn btn-primary" href="http://localhost/Projet4/index.php?action=<?='save'?>&&message=" role="button">
                <h5>Enregistrer</h5>

                <i class="far fa-save"></i>
            </a>
        </div>
        <form action="# " method="post" type="submit" value="Envoyer">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <label for="title">
                        <h3> Titre : </h3>
                    </label>
                    <input type="text" id="title" name="title" value="<?=$chapter['title']?>" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <label for="number">
                        <h3> Number : </h3>
                    </label>
                    <input type="text" id="title" name="title" value="<?=$chapter['number']?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <textarea id="mytextarea" name="content" value="<?=$chapter['content']?>"></textarea>
                </div>
            </div>
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">

            <a class="btn btn-primary" href="http://localhost/Projet4/index.php?action=<?='save'?>&&message=" role="button">
                <h5>Enregistrer</h5>

                <i class="far fa-save"></i>
            </a>
        </div>
    </article>
    <article id="fast" class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3>Chapitres :</h3>
        </div>

        <table class="table table-striped chapters">
            <thead>
                <tr>
                    <th scope="col">chapitre n°</th>
                    <th scope="col">titre</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Date de publication</th>
                    <th scope="col">Editer</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while ($res = $resume->fetch())
            { $limit=300;
             if (strlen($res['content'])>=$limit){
                 $res['content']=substr($res['content'],0,$limit);
                 $space=strrpos($res['content'],' ');
                 $res['content']=substr($res['content'],0,$space)."...";}
            ?>
                <tr>
                    <th scope="row">
                        <?= htmlspecialchars($res['id_chapter'])?>
                    </th>
                    <th scope="row">
                        <?= htmlspecialchars($res['title'])?>
                    </th>
                    <th>
                        <?=nl2br( htmlspecialchars($res['content']))?>
                    </th>
                    <th>
                        <?= htmlspecialchars($res['publication_date'])?>
                    </th>
                    <th> <button type="button" class="btn btn-light"><i class="far fa-edit"></i></button></th>
                </tr>
                <?php

            }
            $resume->closeCursor();
            ?>

            </tbody>
        </table>

    </article>
</div>


<?php $content=ob_get_clean(); ?>
<?php require('templateBack.php'); ?>
