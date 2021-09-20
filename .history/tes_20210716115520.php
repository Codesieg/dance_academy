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

// listHtml($nomDeListe, $listesFruits);


function remplacerLesLettres($string)
{
    for ($index = 0; $index < strlen($string); $index++) {
            $newString = str_replace("o", "0", $string);
            $newString = str_replace("e", "3", $string);
            $newString = str_replace("i", "1", $string);
    }
    echo $newString;
}

remplacerLesLettres($nomDeListe);
