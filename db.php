<?php
require_once __DIR__ . "/Models/Movie.php";

$forrest_gump = new Movie("forrest gump");
$forrest_gump->setData("Seduto sulla panchina alla fermata dell'autobus di Savannah, Forrest Gump racconta con voce lenta della propria incredibile vita e dei problemi mentali e fisici che si porta dietro dalla nascita.", "img/forrest_gump.jpeg", ["tragedy", "comedy"]);

$guarda_in_alto = new Movie("guarda in alto");
$guarda_in_alto->setData("Teco è un fornaio dall'aria delusa che, una mattina come tante, si reca sul tetto dell'edificio in cui lavora per fumare una sigaretta. È incuriosito dal volare di un gabbiano che sembra muoversi diversamente dagli altri.", "img/guarda_in_alto.jpeg", ["fantasy", "adventure"]);

$la_grande_bellezza = new Movie("la grande bellezza");
$la_grande_bellezza->setData("Roma si offre indifferente e seducente agli occhi meravigliati dei turisti: è estate e la città splende di una bellezza inafferrabile e definitiva. Jep Gambardella ha sessantacinque anni e la sua persona sprigiona un fascino che il tempo non ha potuto scalfire.", "img/la_grande_bellezza.jpeg", ["drammatico", "commedia"]);

$movies = [
    $forrest_gump,
    $guarda_in_alto,
    $la_grande_bellezza,
];
