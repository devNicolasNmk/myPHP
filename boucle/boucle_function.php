<?php

function forLoop() {
for( $ct=1; $ct <=10; $ct++ ) {
    echo $ct . "<br>";
        if($ct==10){
            echo "<br>";
        }
    }
}


function forAdvancedLoop($n,$m) {
    for( $ct=$n; $ct <=$m; $ct++ ){
        echo $ct . "<br>";
    }
}echo "<br>";
