<?php
session_start();
if(isset($_GET['erase'])){
    unset($_POST['hist']);
    header('location: historique.php');
    exit;
}

if(!isset($_POST['hist'])){
    $_SESSION[]='saisie';
    $_SESSION[]='historique';
}else{
    $_SESSION['saisie'][]=$_POST['hist'];
    $_SESSION['historique']+=$_POST['hist'];
    
    
}
    
echo $_SESSION['historique'];

?>

<form action="" method="POST">
    <input type="text" name="hist">
    <input type="submit" value="enregistrer">
</form>

<a href="?erase">effacer</a>