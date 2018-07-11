<?php
// session_start();                                             // a venir gestion des sessions pour garder l'historique des calculs


if( isset( $_GET['reset'] ) ) {                                 // debut gestion de l'effacement des données saisies placé en debut de code pour eviter l'errer entete deja envoyée
    unset( $_POST );                                            // action erase post
    header( 'Location: calculatrice.php' );                     // redirection 
    exit;                                                       // stop lecture du script
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
   
    <title>calculatrice</title>

</head>
<body>

<form method='post'>
<input type='number' name='leftNumber' step='any' value='<?php if (isset($_POST['leftNumber'])){ echo $_POST['leftNumber'];} ?>' >
<select name='operateur'>
    <option value='+'>+</option>
    <option value='-'>-</option>
    <option value='*'>*</option>
    <option value='/'>/</option>
</select>
<input type='number' name='rightNumber' step='any' value='<?php if (isset($_POST['rightNumber'])){ echo $_POST['rightNumber'];} ?>' >
<input type='submit' value='Calculer'>


<?php




    if(isset($_POST['operateur'])){                                                                             // test de l'existence de $_POST
        
            if(is_numeric($_POST['leftNumber']) && is_numeric($_POST['rightNumber'])){                          // test du format numérique
                if(($_POST['rightNumber'] == 0) && ($_POST['operateur'] == "/")){
                    echo 'on ne peut diviser un nombre par zero <br><br>';
                } else {                                                                
                    switch($_POST['operateur']) {                                                               // cas operande
                        case '+':
                        // $result= str_replace( '.', ',', $_POST['leftNumber'] + $_POST['rightNumber']);       // pour gestion des historiques
                        echo str_replace( '.', ',', $_POST['leftNumber'] + $_POST['rightNumber']);
                        break;
                        case '-':
                        // $result= str_replace( '.', ',', $_POST['leftNumber'] - $_POST['rightNumber']);
                        echo str_replace( '.', ',', $_POST['leftNumber'] - $_POST['rightNumber']);
                        break;
                        case '*':
                        // $result= str_replace( '.', ',', $_POST['leftNumber'] * $_POST['rightNumber']);
                        echo str_replace( '.', ',', $_POST['leftNumber'] * $_POST['rightNumber']);
                        break;
                        default:
                        // $result= str_replace( '.', ',', $_POST['leftNumber'] / $_POST['rightNumber']);
                        echo str_replace( '.', ',', $_POST['leftNumber'] / $_POST['rightNumber']);
                    }
                } 
            } else {
            echo 'veuillez-vérifier votre saisie!!<br><br>';                                                 
        }
    }
// $_session['resultat']=$result;                                                                                          // a venir gestion des historiques
// $_session['historique']=$_session['resultat'];                                                                          // a venir gestion des historiques

// echo "<br><br>";
// echo '<textarea style="width:100px; height:100px;">' .$_session['resultat'] . $_session['historique'] . '</textarea>';  // a venir gestion des historiques

?>
</form>
<br>
<a href="?reset">effacer</div></a>
</body>
</html>