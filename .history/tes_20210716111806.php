<?php

$listesFruits = ['banane', 'mangue', 'pomme'];
$nomDeListe = 'Fruits';



function listHTML($nomListe, $array) {
    if ($nomListe == null || $array == null) {
        return null;
    }
    $listes = "<h3>".$nomListe ."</h3><ul>";
    foreach($array as $elements) {
        $listes += "<li> . $elements .</li>";
    }
    $listes =+ '</ul>';
    echo "" . $listes;
}

listHtml($nomDeListe, $listesFruits);