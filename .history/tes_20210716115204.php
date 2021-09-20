<?php

$listesFruits = ['banane', 'mangue', 'pomme'];
$nomDeListe = 'Frouites';



function listHTML($nomListe, $array)
{
    if ($nomListe == null || $array == null) {
        return null;
    }
    echo "<h3>" . $nomListe . "</h3><ul>";
    foreach ($array as $elements) {
        echo "<li>" . $elements . "</li>";
    }
    echo '</ul>';
}

listHtml($nomDeListe, $listesFruits);


function remplacerLesLettres($string)
{
    for ($index = 0; $index < strlen($string); $index++) {
            str_replace("o", "0", $string[$index]);
        
        
    }
    echo $string;
}

remplacerLesLettres($nomDeListe);
