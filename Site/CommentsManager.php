<?php

class CommentsManager
{
	private $_db;
	
	
	public function __construct($db)
	{
		$this->setDb($db);
	}
	public function add(Comments $comm)
	{		//requette d'insertion
		$q=$this->_db->prepare('INSERT INTO ListOfComments SET autor= :autor,comment= :comment,dateOfComment= :dateOfComment');

		$q->':autor',$comm->autor();
		$q->':comment',$comm->comment();
		$q->':dateOfComment',$comm->dateOfComment();
		//éxecution de la requette;
		$q->execute();
	}

	public function setDb(PDO $db)
	{
		$this->_db=$db;
	}
	public function get($id)
	{
		$id = (int) $id;
		$q = $this->_db->query('SELECT id, autor, comment, dateOfComment FROM ListOfComments WHERE id = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		return new comment($donnees);
}

	public function delete($comment)
	{
		// execution de la requette delete
		$this->_db->exec('DELETE FROM comments WERE id='.$comm->id());
	}
	public function getList()
	{
		$comms = [];
		$q=$this->_db->query('SELECT id,autor,comment,dateComment ORDER BY dateComment DESC');
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$comms []=new Comment($donnees);
		}
		return $comms;
	}
	public function update(Comment $comms)
		{
			$q=$this->_db->prepare('Update comments INSERT INTO comments autor= :autor,Comment= :Comment ');
			$q->bindValue(':autor',$comm->autor(),PDO::PARAM_STR);
		$q->bindValue(':comment',$comm->comment(),PDO::PARAM_STR);
			
			$q->execute();
		}
}

?>