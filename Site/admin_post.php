<?php

if (isset($_POST['billet']) AND $_POST['billet']=='create')
    {
    header('location:interfacecible.php');}

elseif(isset($_POST['billet']) AND $_POST['billet']=='moderate')
    {
    header('location:moderate.php');}
else { echo '<h2> Veuillez m\'excuser mais je n\'ai pas compris votre choix !</h2>';
        include("admin.php");}
?>