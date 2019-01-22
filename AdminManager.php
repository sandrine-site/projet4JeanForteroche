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
 + @param[text] $login
 * @param[text] $pw
 *
 * @return[bool ]$pwVerif = 1 if the password is ok
 */  
    public function verifiePw($login,$pw)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT passwords FROM Passwordtable WHERE logins = ?');
        $req->execute(array($login));
        $post = $req->fetch();

        if (password_verify($pw,$post['passwords'])){
            $pwVerif=true;
        } 
        else{$pwVerif=$post;}
        return $pwVerif;
    }

    /**
 *this function give an absract of evry chapter
 + 
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
    public function lenchapter()
    {
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
    public function getComments()
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id_comment,id_chapter,comment FROM comments WHERE ? ORDER BY id_comment DESC ');
        $req->execute(array(1));
        return $req;
        }



    /**
 * this function counts the number of chapter, public access
 *                           
 * @return [int] $len t[he number of chapter]
 */  
    public function lenComments()
    {
        $db = $this->dbConnect();
        $req=$db->query('SELECT COUNT(id_comment) FROM comments WHERE 1 ');
        $len=$req->fetch();
        return $len;
    }


}
