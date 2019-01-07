<?php
require_once('./model/ChapterManager.php');
require_once('./model/CommentManager.php');

function chapPost($postId)
{
  $chapterManager=new jeanForteroche\Model\ChapterManager;
  $post=$chapterManager->getChap($postId);
  $len=$chapterManager->len();
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $comments=$commentsManager->getComments($post['id']);
  require('view/frontend/pageChapters.php');
}

function commentChapter($chapId){
  $chapterManager=new jeanForteroche\Model\ChapterManager;
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $post=$chapterManager->getChap($chapId);
  $comments=$commentsManager->getComments($chapId);
require('view/frontend/pageComments.php');
}

function post(){
  $chapterManager=new jeanForteroche\Model\ChapterManager;
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $post=$chapterManager->getChapter();
  $len=$chapterManager->len();
  $comments=$commentsManager->getComments($post['id']);
require('view/frontend/frontpage.php');
}

function signalComment(){
  $id=$_GET['id'];
  $chapId=$_GET['id_chapter'];
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $commented=$commentsManager->getSignal($id);
  $comments=$commentsManager->getComments($chapId);
  require('view/frontend/pageComments.php');
}
function addComment($id_chapter,$author,$comment){
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $affectedLines = $commentsManager->postComment($id_chapter, $author, $comment);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=comments&id=' . $id_chapter);
    }
}
