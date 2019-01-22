<!--titre de la page -->
<?php $title = 'Administration';?>

<?php ob_start(); ?>
<div class="Administration">
    Depuis cette page vous pouvez administrer le site il vous suffit pour cela de choisir un onglet ci-dessus.
</div>
<article id="fast" class="row">
    <h1>Apercu rapide : </h1>
    <h4>Les chapitres</h4>
    <table class="table table-striped">
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
            { $limit=500;
        if (strlen($res['content'])>=$limit){
            $res['content']=substr($res['content'],0,$limit);
            $space=strrpos($res['content'],' ');
            $res['content']=substr($res['content'],0,$space)."...";}
            ?>
            <tr>
                <th scope="row"><?= htmlspecialchars($res['id_chapter'])?></th>
                <th scope="row"><?= htmlspecialchars($res['title'])?></th>
                <th><?=nl2br( htmlspecialchars($res['content']))?> </th>
                <th><?= htmlspecialchars($res['publication_date'])?> </th>
                <th> <button type="button" class="btn btn-light"><i class="far fa-edit"></i></button></th>
            </tr>
            <?php
                
            }
            $resume->closeCursor();  
            ?>

        </tbody>
    </table>
    <h4>Les derniers commentaires </h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Chapitre n°</th>
                <th scope="col">Commentaire n°</th>
                <th scope="col">nb de signalement</th>
                <th scope="col">Résumé</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($comment = $resumecomments->fetch())
            { $limit=300;
        if (strlen($comment['comment'])>=$limit){
            $comment['comment']=substr($comment['comment'],0,$limit);
            $space=strrpos($comment['comment'],' ');
            $comment['comment']=substr($comment['comment'],0,$space)."...";}
            ?>
            <tr>
                
                <td><?= htmlspecialchars($comment['id_chapter'])?></td>
                <td><?= htmlspecialchars($comment['id_comment'])?> </td>
                <td> </td>
                <th><?=nl2br( htmlspecialchars($comment['comment']))?> </th>
                <td><button type="button" class="btn btn-light"><i class="far fa-edit"></i></button></td> 
                <td><button type="button" class="btn btn-light"><i class="far fa-times-circle"></i></button></td>
            </tr>
            <?php
                
            }
            $resume->closeCursor();  
            ?>
        </tbody>
    </table>
    <?php $content=ob_get_clean(); ?>
    <?php require('templateBack.php'); ?>

