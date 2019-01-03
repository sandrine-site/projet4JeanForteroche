<?php
function chargerClass ($classname)
{
	require $classname.'.php';
	
	};
	spl_autoload_register('chargerClass');



$comm=new Comment(['autor' => 'sandrine' ,'comment' => 'dklfdfdlkfsdkfdkfldflkfds' ]);

$db = new PDO('mysql:host=91.216.107.164;dbname=slash1040766_1oujev;charset=utf8','slash1040766', 'xlsvcq1f3c');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
var_dump($comm);
$manager= new CommentManager($db);
$manager->add($comm);

?>

