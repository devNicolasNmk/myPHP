<?php
// session_start();                                                              // gestion des historiques des calculs a venir

require('ini.php');                                                              // appel du fichier de config avec constantes 
require('function.php');                                                         // appel du fichier des fonctions   

echo viewForm(TVA);
if(isset($_POST['HT']) && (is_numeric($_POST['HT']))){
    
    $showTVA = montantTVA($_POST['HT'],$_POST['taux']);
    $result= prixTTC( $_POST['HT'],$_POST['taux']);
    
    echo 'le montant de la TVA  est de : ' . $showTVA . ' euros <br>';
    echo 'le montant TTC est de : ' . $result . ' euros';
}else false;

// a venir => gestion des historiques

