<?php

$listesFruits = ['banane', 'mangue', 'pomme'];
$nomDeListe = 'Fruits';



function listHTML($nomListe, $array) {
    if ($nomListe == null || $array == numm) {
        return null;
    }
    $listes = "<h3>".$nomListe ."</h3><ul>";
    foreach($array as $elemants) {
        $listes =+ $elements;
    }
    $listes =+ '</ul>';
    echo "" . $listes;
}

listHtml($nomDeListe, $listsFruits);