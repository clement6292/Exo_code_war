<?php
function verifyArray($array)
{
    // Initialiser les variables de compte pour chaque chaîne 
    $countA = 0;
    $countB = 0;
    $countC = 0;

    // Parcourir le tableau et mettre à jour les comptes

    foreach ($array as $element) {
        if ($element == "a") {
            $countA++;
        } elseif ($element == "b") {
            $countB++;
        } elseif ($element == "c") {
            $countC++;
        }
    }
    //Je verifie si dans mon tableau les elements se retrouve 2 et trois fois  de me retourner true 

switch (   $countA == 3 && $countB == 2
        || ($countA == 3 && $countC == 2)
        || ($countB == 3 && $countA == 2)
        || ($countB == 3 && $countC == 2)
        || ($countC == 3 && $countA == 2)
        || ($countC == 3 && $countB == 2)) {
        case 0:
        echo (true);
        break;
//dans le cas contraire false
        default:
       echo (false);
    }
}
//quelques example à verifier
var_dump(verifyArray(["a", "b", "a", "b", "b"])); // true
var_dump(verifyArray(["b", "a", "c", "b", "c"])); // false
var_dump(verifyArray(["c", "a", "a", "b", "a"])); // false