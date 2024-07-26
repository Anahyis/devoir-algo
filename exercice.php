<?php

$budget = (int) readline("Saisie ton budget initial");
$nul = 0;

while ($budget > $nul) {
    $question = readline("Recette ou Dépense ? \n");
    $R = "Recette";
        $R = readline("Quel est le montant de la recette ? \n");
        $add = 0;
        $add = $budget + $R;
        readline("Ton budget est de : " . $add);
    $D = "Dépense";
        $D = readline("Quel est le montant de la dépense ? \n");
        if ($D < $budget) {
            $less = $budget - $D;
            $percentage = $D / $budget * 100;
            echo "Ton budget est maintenant de : " . $less . "\n" . "Cela représente une dépense de " . $percentage . "% de ton budget";
        } else if ($D >= $budget) { 
            echo "Erreur. Dépense trop élevée ! \n";
        }
}







// while ($budget > $nul) {
//     $question = readline("Recette ou Dépense ? \n");
//     $R = "Recette";
//         $R = readline("Quel est le montant de la recette ? \n");
//         $add = 0;
//         $add = $budget + $R;
//         readline("Ton budget est de : " . $add);
//     $D = "Dépense";
//         $D = readline("Quel est le montant de la dépense ? \n");
// }
?>