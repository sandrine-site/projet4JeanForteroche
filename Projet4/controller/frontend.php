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
  $chapterManager=new jeanForteroche\Model\ChapterManager();
  $post=$chapterManager->getChapter();
  $commentsManager=new jeanForteroche\Model\CommentsManager;
  $len=$chapterManager->len();
  $comments=$commentsManager->getComments($post['id']);
require('view/frontend/frontpage.php');
}
