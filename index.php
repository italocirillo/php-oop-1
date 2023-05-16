<?php
require_once __DIR__ . "/Models/Movie.php";

$forrest_gump = new Movie("forrest gump");
$forrest_gump->setData("lorem ipsum", "cover", ["tragedy", "comedy"]);

$guarda_in_alto = new Movie("guarda_in_alto");
$guarda_in_alto->setData("lorem ipsum", "cover", ["fantasy", "adventure"]);

echo ($forrest_gump->printMovie());
echo ("</br></br>");
echo ($guarda_in_alto->printMovie());
