<?php
class CommentManager
{
	private $_db;
	
	public function __construct($db)
	{
		$this->setDb($db);
	}

public function setDb(PDO $db)
{
	$this->_db = $db;
}
public function add(Comment $comm)
{
	$q = $this->_db->prepare('INSERT INTO ListOfComments(autor, comment) VALUES(:autor, :comment)');

	$q->bindValue(':autor', $comm->autor());
	$q->bindValue(':comment', $comm->comment());
	
	$q->execute();
}
}
?>