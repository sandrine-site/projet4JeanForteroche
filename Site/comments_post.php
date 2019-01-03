<?php


if($_POST['autor']!='' AND $_POST['comment']!="")
	{ try
            {
                $bdd = new PDO('mysql:host=91.216.107.164;dbname=slash1040766_1oujev;charset=utf8','slash1040766', 'xlsvcq1f3c');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());      
            }

$req=$bdd->prepare ('INSERT INTO comments (autor, comment) VALUES(?,?)');
$req->execute(array($_POST['autor'],$_POST['comment']));

	}
else
	{
		$message = "<h3> Désolé mais je n'ai pas compris votre demande !</h3>";
	}
header('Location: comments.php?message='.$message);

?>