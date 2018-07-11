<?php
// var_dump($_POST);

/**
 * function viewForm => affichage du formulaire
 *
 * @param array $TVA => constante presente dans ini.php
 * @return void
 */
 function viewForm($TVA){
    ?>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>calcul de la TVA et du TTC</title>
            
            </head>
            <body>

                <h1> calcul de la TVA et du TTC</h1>

                <form action="" method="POST">
                    <label for="taux">choisissez votre taux de TVA (en %)</label><br><br>
                    <!-- loop for => show possibilities in constant array TVA -->
                    <select name="taux" ><?php for($i=0; $i <count(TVA); $i++){ echo '<option>' . TVA[$i] . '</option>';}?></select><br><br>
                    <label for="HT">Saisissez le montant HT</label><br><br>
                    <input type="text" name="HT" placeholder="montant HT"><br><br>
                    <input type="submit" value="calculer">
                </form>
                
            </body>
        </html>
  <?php
  }

/**
 * function montantTVA => calc 'TVA'
 * @param float $prixHT
 * @param float $taux
 * @return float $montantTVA
 */
function montantTVA(float $prixHT, float $taux) : float{
    $montantTVA = ($prixHT *$taux)/100;
    // var_dump($montantTVA);
    return $montantTVA;  
}

/**
 *function prixTTC => calc 'TTC
 *
 * @param float $prixHT
 * @param float $taux
 * @return float $montantTTC
 */
function prixTTC(float $prixHT, float $taux) : float{
        $montantTTC= (($taux/100)+1) * $prixHT;
        // var_dump($montantTTC);
        return $montantTTC;
}
