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
  
}
