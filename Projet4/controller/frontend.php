<?php
require_once('./model/ChapterManager.php');
//require_once('./model/CommentManager.php');
// function listPosts()
//{
// $postManager=new Blog\Model\PostManager();
// $posts=$postManager->getPosts();
// require('view/frontend/listPostsView.php');
//}
//
//function post()
//{
// $postManager=new Blog\Model\PostManager();
// $commentManager=new Blog\Model\CommentManager();
// $post=$postManager->getPost($_GET['id']);
// $comments=$commentManager->getComments($_GET['id']);
//
// require('./view/frontend/postView.php');
//}
//
//function addComment($postId,$author,$comment)
//{
// $commentManager=new Blog\Model\CommentManager();
//$affectedlines=$commentManager->postComment($postId,$author,$comment);
//if($affectedlines=false){
//throw new Exception('Impossible d\'ajouter le commentaire!');
//
//}else{
//header('location:index.php?action=post&id='.$postId);
//}}
function post(){
  $chapterManager=new jeanForteroche\Model\ChapterManager();
  $post=$chapterManager->getChapter();

 require('view/frontend/frontpage.php');
  }
