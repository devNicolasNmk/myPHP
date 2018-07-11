<?php

// [ 2 ] Compter avec boucles et procédures

//     Produire l'affichage des entiers de 1 à 10 à l'aide d'une boucle while.
//     Idem avec une boucle for.
//     Placer cette boucle dans une procédure et y faire appel.
//     Modifier la procédure pour pouvoir compter de 1 à un entier quelconque.


///////// boucle while ///////////
echo 'Boucle While' . "<br><br>";
$cpt=0;
while( $cpt < 10 ){
    $cpt += 1;
    echo $cpt . "<br>";
    
}echo "<br>";

///////// boucle for ///////////
echo 'boucle for' . "<br><br>";
for( $ct=1; $ct <=10; $ct++ ){
    echo $ct . "<br>";
}echo "<br>";

///////// appel de fonction /////////
echo 'appel de fonction'. "<br>";
require('boucle_function.php');
$n=1;
forLoop($n);

///////// appel de fonction /////////
echo 'appel de fonction 2' . "<br>";
$n=1;

        ///////// formulaire html /////////
        echo "<form method='post'>
            <label for='entier'>entier à saisir : <br><br>
            <input type='numeric' name='entier'><br><br>
            <input type='submit'><br><br>
            </form>";

        ///////// Verification de la validité du $_POST
            
            if( isset( $_POST['entier'] ) ) {

                if( is_numeric( $_POST['entier'] ) ) {

        ///////// appel de la fonction /////////
                    forAdvancedLoop( $n, $_POST['entier']);

        ///////// si saisie non numéric =>_err /////////
                }else{

                    echo "saisie incorrecte";
                }
            }     

