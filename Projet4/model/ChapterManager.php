<?php
namespace jeanForteroche\Model;
require_once("Manager.php");

class ChapterManager extends Manager{

  public function getChapter()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT id,title,content FROM chapter ORDER BY id DESC LIMIT 0,1');
    $post = $req->fetch();
    return $post;
  }


  public function getChap($postId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT id,title,content FROM chapter WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();
return $post;
  }


  public function len()
  {
    $db = $this->dbConnect();
    $req=$db->query('SELECT COUNT(id) FROM chapter WHERE 1 ');
    $len=$req->fetch();
    return $len;
  }
}
