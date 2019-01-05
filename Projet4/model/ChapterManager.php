<?php
namespace jeanForteroche\Model;
require_once("Manager.php");

class ChapterManager extends Manager{
public function getChapter()

{
    $db = $this->dbConnect();

$req = $db->query('SELECT id,title,content FROM chapter ORDER BY id DESC LIMIT 0,1');
$post = $req->fetch();
return $post;        }

}
