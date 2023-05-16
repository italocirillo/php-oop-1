<?php
require_once __DIR__ . "/Models/Movie.php";

$forrest_gump = new Movie("forrest gump");

echo ($forrest_gump->printMovie());
