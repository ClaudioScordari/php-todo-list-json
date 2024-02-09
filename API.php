<?php

// Accetta tutte le origini
header('Access-Control-Allow-Origin: *');

// Recupero contenuto del mio file json
$jsonContent = file_get_contents('todo.json');

// Espongo il l'arrai associativo ri-traducendolo in file json per la chiamata API
header('Content-Type: application/json');

echo $jsonContent;
