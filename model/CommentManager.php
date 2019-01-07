<?php

namespace jeanForteroche\Model;
require_once("Manager.php");

class CommentsManager extends Manager{

  public function getComments($chapId)
  {
    $db = $this->dbConnect();

    $comments = $db->prepare('SELECT id,author,comment, DATE_FORMAT(dateComment, \'%d/%m/%Y \') AS DateComment_fr FROM comments WHERE id_chapter=? ORDER BY dateComment DESC');
    $comments->execute(array($chapId));
    return $comments;
  }
  
  public function getSignal($id)
  {
    $db = $this->dbConnect();

    $comment = $db->prepare( 'INSERT INTO signalcomments (id,id_chapter,author,comment,dateComment)
SELECT id,id_chapter,author,comment,dateComment FROM comments WHERE id=?;DELETE FROM comments WHERE id=?');
    $comment->execute(array($id,$id));
    $message=' Merci de nous avoir signalé ce message, nous allons examiner votre requette';
      return $message;
  }
  public function postComment($id_chapter, $author, $comment)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO comments(id_chapter, author, comment, dateComment) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($id_chapter, $author, $comment));
        return $affectedLines;
  }
  
}
