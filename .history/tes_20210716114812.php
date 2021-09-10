<?php

$listesFruits = ['banane', 'mangue', 'pomme'];
$nomDeListe = 'Fruits';



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
        if ($string[$index] === "e") {
            str_replace("e", "3", $string[$index]);
        } else if ($string[$index] === "i") {
            str_replace("i", "1", $string[$index]);
        } else if ($string[$index] === "o") {
            str_replace("o", "0", $string[$index]);
        }
    }
}

remplacerLesLettres($nomDeListe);
