<?php


// [ 3 ] Figures géométriques



//     Écrire une boucle qui produit une ligne horizontale de 8 étoiles.
//     Imbriquer ce code dans une nouvelle boucle pour produire un carré de 8 lignes horizontales, chacune contenant 8 étoiles.

echo "forme comportant 8 lignes avec 8 etoiles chacune<br><br>";

for( $i=1; $i <=8; $i++ ) {                         //----------------- gestion des sauts de lignes -----------------//

    for( $j = 1; $j <= 8; $j++ ) {                  //----------------- gestion de la figure geometrique ------------//
        echo "*";
        if( $j == 8){
            echo "<br>";
        }
    }
    
}

//     Produire des triangles rectangles avec différentes orientations.
    echo "1er orientation du trianble rectangle<br><br>";
    for( $i=1; $i <=8; $i++ ) {                    //----------------- gestion des sauts de lignes -----------------//

        for( $j = 1; $j <= $i; $j++ ) {            //----------------- gestion de la figure geometrique ------------//
                    echo "*";
                }
            echo "<br>";  
    }

    echo "2eme orientation<br><br>";

    $k=8;                                          //----------------- initialisation de la variable ---------------//
    for( $i=1; $i <=8; $i++ ) {                    //----------------- gestion des sauts de lignes -----------------//
                                                
        for( $j = 1; $j <= $k; $j++ ) {            //----------------- gestion de la figure geometrique ------------//
            echo "*";
            if($j == $k) {
                echo  "<br>";
                $k--;
            }
        }
    }