<?php

$donnees  =  array(

    array('lettre'  =>  'a',  'suivant'  =>  10),
    
    array('lettre'  =>  'e',  'suivant'  =>  -1),
    
    array('lettre'  =>  'e',  'suivant'  =>  6),
    
    array('lettre'  =>  'l',  'suivant'  =>  1),
    
    array('lettre'  =>  'p',  'suivant'  =>  8),
    
    array('lettre'  =>  'o',  'suivant'  =>  11),
    
    array('lettre'  =>  'x',  'suivant'  =>  12),
    
    array('lettre'  =>  'p',  'suivant'  =>  3),
    
    array('lettre'  =>  'r',  'suivant'  =>  5),
    
    array('lettre'  =>  'm',  'suivant'  =>  7),
    
    array('lettre'  =>  'b',  'suivant'  =>  3),
    
    array('lettre'  =>  'b',  'suivant'  =>  0),
    
    array('lettre'  =>  'a',  'suivant'  =>  9)
    
    );

    echo '<form method="post">

        <label for="index">Suite chainée : </label><br><br>
        <input type="text" name="index" placeholder="votre index">
        <input type="submit" value="valider votre index">
        </form>
        
        ';

if(!isset($_POST['index']) || ($_POST['index'] ==='')) {
    echo "veuillez saisir un nombre";
   }
if(isset($_POST['index']) && ctype_digit($_POST['index'])){
    $suivant=0;
    $index = $_POST['index'];

    while($suivant !== -1){
    echo $donnees[$index]['lettre'];
    $suivant = $donnees[$index]['suivant'];
    $index = $suivant;
    }
   
}

?>
