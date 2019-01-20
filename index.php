<?php
require('controller/frontend.php');
try{
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'others')
        {
            if (isset($_GET['id_chapter'])&& $_GET['id_chapter']>0) 
            {
                chapPost($_GET['id_chapter']);
            }
        }

        elseif ($_GET['action'] == 'comments')
        {
            if (isset($_GET['id_chapter'])&& $_GET['id_chapter']>0) 
            {
                commentChapter($_GET['id_chapter']);
            }
            else
            {
                throw new exception('Aucun identifiant de chapitre envoyé');
            }
        }

        elseif($_GET['action']=='addComment')
        {
            if (isset($_GET['id_chapter'])&&$_GET['id_chapter']>0)
            {
                if(!empty($_POST['author'])&&!empty($_POST['comment']))
                {
                    addComment($_GET['id_chapter'],$_POST['author'],$_POST['comment']);
                }
                else
                {
                    throw new exception('Tous les champs ne sont pas remplis !');
                }
            }
            else
            {
                throw new exception('Aucun identifiant de chapitre envoyé');
            }
        }

        elseif($_GET['action']=='signalComment')
        {
            if (isset($_GET['id_comment'])&&$_GET['id_comment']>0&&$_GET['id_chapter']&&$_GET['id_chapter']>0)
            {

               $from=$_GET['from'];
                signalComment($_GET['id_comment'],$_GET['id_chapter'],$from);
            }
            else
            {
                throw new exception('il y a un probleme sur un des identifiants envoyé');
            }
        }

        elseif($_GET['action']=='creditsPhoto')
        {
            require('view/frontend/creditsPhoto.php');
        }
    }
    else {

        post();
    }
}
catch(Exception $e)
{
    echo 'Erreur :'.$e->getMessage();
}
