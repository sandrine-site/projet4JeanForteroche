<?php

/*
* this class manages the administration interface
* package [Manager.php]
* package [jeanForteroche]\[Model]
*/

namespace jeanForteroche\Model;
require_once("Manager.php");

class AdminManager extends Manager{

    /**
  * this function will verifie if the password and tHe login are ok
  * @param[text] $login
  * @param[text] $pw
  *
  * @return[bool ]$pwVerif = 1 if the password is ok
  */

    public function verifiePw($login,$pw)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT passwords FROM Passwordtable WHERE logins = ?');
        $req->execute(array($login));
        $resultat = $req->fetch();

        $pwVerif= password_verify($pw,$resultat['passwords']);
        return $pwVerif;
    }

    public function changedPW($name,$pw){
        $db=$this->dbConnect();
        $req=$db->prepare('UPDATE Passwordtable SET passwords=? where logins=?');
        $req->execute(array($pw,$name));
    $message='le mot de passe a bien été modifié';
    return $message;}

    /**
  *this function give an absract of evry chapter
  *
  * @return[array]$resum = the caracteres of the chapter
  */
    public function resumeChapter(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id_chapter,title,content, DATE_FORMAT(publication_date, \'%d/%m/%Y \') AS publication_date FROM chapter WHERE ? ORDER BY id_chapter DESC ');
        $req->execute(array(1));
        return $req;
    }

    /**
  * this function counts the number of chapter, public access
  *
  * @return [int] $len t[he number of chapter]
  */
    public function lenchapter(){
        $db = $this->dbConnect();
        $req=$db->query('SELECT COUNT(id_chapter) FROM chapter WHERE 1 ');
        $len=$req->fetch();
        return $len;
    }

    /**
  * this function will look for and displays the comment corresponding at the chapter, public access
  * @param [int] $id_chapter [the id of chapter]
  *
  * @return [array] $comments [containing the comments]
  */
    public function getComments(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id_comment,signalement,id_chapter,comment FROM comments WHERE ? ORDER BY id_comment DESC ');
        $req->execute(array(1));

        return $req;
    }

    /**
     * This function delete the selectionned comment
     * @param [integer] $id 
     * 
     * return [text] $confirm
     */
    public function deletComments($id){
        $db = $this->dbConnect();
        $req=$db->prepare('DELETE FROM comments WHERE id_comment=?');
        $req->execute(array($id));
        $confirm="Le message n° ".$id." a bien été supprimé.";
        return $confirm;
    }

    /**
     * This function delete the signalement of the selectionned comment
     * @param [integer] $id 
     * 
     */
    public function keepComment ($id){
        $db = $this->dbConnect();
        $req=$db->prepare('UPDATE comments SET signalement=0 where id_comment=?');
        $req->execute(array($id));
        $message="";
        return $message;
    }
    
    /**
    * this function save a new chapter
    * 
    * @param[text] $title
    * @param[text]  $content
    * 
    */

     public function createChap($title,$content)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO chapter(publication_date,title, content) VALUES(NOW(), ?, ?');
    $affectedLines = $comments->execute(array($title,$content));
        return $affectedLines;
  }


}
