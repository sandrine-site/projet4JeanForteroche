<?php

class Comment
{
	private $_Id;
	private $_autor;
	private $_comment;
	private $_dateOfComment;

//liste desgetter
public function id()
{
	return $this->_id;
}
public function autor()
{
	return $this->_autor;
}
public function comment()
{
	return $this->_comment;
}
public function dateOfComment()
{
	return $this->_dateOfComment;
}

//liste des setter

public function setId($id)
{
	$_Id = (int)$id;
	if ($id>0)
	{
		$this->_id=$Id;
	}
}
public function setAutor($autor)
{
	if(is_string($autor))
	{
		$this->_autor=$autor;
	}
}
public function setComment($comment)
{
	if(is_string($comment))
	{
		$this->_comment=$comment;
	}
}
public function hydrate(array $donnees)
{
	foreach($donnees as $key=>$value)
	{
		$method='set'.ucfirst($key);
		if(method_exists($this,$method))
		{
			$this->$method($value);
		}
	}
}
	public function __construct(array $data) 
	{
        $this->hydrate($data);
    }
}
?>