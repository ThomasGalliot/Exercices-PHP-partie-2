<?php
    //exercice 1
    $age = 20;

    if ($age >= 18)
        echo "Vous êtes majeur.<br><br>";

    else
        echo "Vous êtes mineur.<br><br>";

?>

<?php
    //exercice 2
    $isEasy = true;

    if($isEasy)
        echo "C'est facile!!<br><br>";
    
    else
        echo "C'est difficile!!!<br><br>";

?>

<?php
    //exercice 2 bis
    $isEasy = false;

    switch ($isEasy) {
        case true:
            echo "C'est facile!!<br><br>";
        break;

        case false:
            echo "C'est difficile!!!<br><br>";
        break;
    }

?>

<?php
    //exercice 3
    $age = 20;
    $gender = 'Homme';

    if ($gender === 'Homme' && $age >= 18)
        echo "Vous êtes un homme et vous êtes majeur.<br><br>";
    
    else if ($gender === 'Homme' && $age < 18)
        echo "Vous êtes un homme et vous êtes mineur.<br><br>";
    
    else if ($gender === 'Femme' && $age >= 18)
        echo "Vous êtes une femme et vous êtes majeur.<br><br>";

    else if ($gender === 'Femme' && $age < 18)
        echo "Vous êtes une femme et vous êtes mineur.<br><br>";

?>

<?php
    //exercice 4
    $magnitude = 9;

    switch ($magnitude) {
        case 1:
            echo "Micro-séisme impossible à ressentir.<br><br>";
        break;
        
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br><br>";
        break;

        case 3;
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br><br>";
        break;

        case 4:
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br><br>";
        break;

        case 5:
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br><br>";
        break;

        case 6:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br><br>";
        break;

        case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br><br>";
        break;

        case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br><br>";
        break;

        case 9:
            echo "Séisme capable de tout détruire sur une très vaste zone.<br><br>";
        break;

        default:
            echo "cette magnitude n'exixte pas.<br><br>";
    }

?>

<?php
    //exercice 5
    $gender = 'Homme';

    if ($gender == 'Homme')
        echo "C'est une développeuse!!!<br><br>";

    else
        echo "C'est un développeur!!!<br><br>";

?>

<?php
    //exercice 6
    $age = 20;

    if ($age >= 18)
        echo "Tu es majeur.<br><br>";

    else
        echo "Tu n'es pas majeur<br><br>";
?>

<?php
    //exercice 7
    $isOk = true;

    if (! $isOk)
        echo "C'est pas bon!!!<br><br>";

    else
        echo "C'est ok!!<br><br>";

?>

<?php
    //exercice 8
    $isOk = false;

    if ($isOk)
        echo "C'est ok!!<br><br>";

    else
        echo "C'est pas bon!!!<br><br>";

?>