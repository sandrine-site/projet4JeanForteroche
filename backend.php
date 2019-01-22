<?php
/**
 * This file manages useful functions for the backend
 * package /[model]/[AdminManager.php]
 */


require_once('./model/AdminManager.php');
require_once('./model/ChapterManager.php');
require_once('./model/CommentManager.php');

/**
 *  this function verify the password
 * @param [integer] $id_chapter [Id of the last chapter]
 * @use AdminManager
 * 
 *                             
 * @return [array] $post [array containing the element of the chapter]
 * @return [integer] $len [nombre de chapitre]
 * @return [array] $comments [array containing different post concerning the chapter]                                                       
 */

function verifiePws($login,$pw)
{
    $adminManager=new jeanForteroche\Model\AdminManager;
    $verify=$adminManager->verifiePw($login,$pw);
    if ($verify==true)
    {header("Location: index.php?action=adminAccueil");;}
    else
    {$message='le nom d\'utilisateur et le mot de passe ne correspondent pas';
        require('view/frontend/password.php');}


}
/**
 *  this function is use to fill the admin table
 * 
 * @use AdminManager
 * 
 *
 * @link ['view/frontend/adminAccueil.php] [Accueil Admin]                                    
 * @return [array] $post [array containing the element of the chapter]
 * @return [integer] $len [nombre de chapitre]
 *                                                       
 */

function adminAccueil()
{
  $adminManager=new jeanForteroche\Model\AdminManager;
  $resume=$adminManager->resumeChapter();
  $lenchapter=$adminManager->lenchapter();
  $resumecomments=$adminManager->getComments();
$lencomments=$adminManager->lenComments();
   
    {require('view/backend/AccueilAdmin.php');}
   


}

