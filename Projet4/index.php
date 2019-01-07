<?php
require('controller/frontend.php');
try{

  if (isset($_GET['action'])&&$_GET['action'] == 'others'&& isset($_GET['id'])&& $_GET['id']>0) {
    chapPost($_GET['id']);}
elseif (isset($_GET['action'])&&$_GET['action'] == 'comments'&& isset($_GET['id'])&& $_GET['id']>0) 
  {
    commentChapter($_GET['id']);}
//        if (isset($_GET['id']) && $_GET['id'] > 0) {
//            post();
//        }

//    elseif($_GET['action']=='addComment'){
//        if (isset($_GET['id'])&&$_GET['id']>0){
//          if(!empty($_POST['author'])&&!empty($_POST['comment'])){
//            addComment($_GET['id'],$_POST['author'],$_POST['comment']);
//          }
//          else{throw new exception('Tous les champs ne sont pas remplis !');}
//          }else{
//        throw new exception('Aucun identifiant de billet envoyé');}}}
else {
    post();
}
}
catch(Exception $e){
  echo 'Erreur :'.$e->getMessage();
}
