<?php

$budget = (int) readline("Saisie ton budget initial");
$nul = 0;

while ($budget > $nul) {
    $question = readline("Recette ou Dépense ? \n");
    switch($question) {
        case "Recette";
        $R = (float) readline("Quel est le montant de la recette ? \n");
        $add = 0;
        $add = $budget + $R;
        echo "Ton budget est de : " . $add . "\n";
        $newbudget = $add;
        $budget = $newbudget;
        break;

        case "Dépense";
        $D = (float) readline("Quel est le montant de la dépense ? \n");
        if ($D < $budget) {
            $less = $budget - $D;
            $percentage = $D / $budget * 100;
            echo "Ton budget est maintenant de : " . $less . "\n" . "Cela représente une dépense de " . $percentage . "% de ton budget" . "\n";
            $newbudget = $less;
            $budget = $newbudget;
        } else if ($D >= $budget) { 
            echo "Erreur. Dépense trop élevée ! \n";
        }
        break;
    }
}




?>