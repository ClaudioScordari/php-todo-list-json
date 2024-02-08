<?php

// Recupero contenuto del mio file json
$jsonContent = file_get_contents('todo.json');

// Traduco il file json in array associativo
$arrayAssociativo = json_decode($jsonContent, true);

// Espongo il l'arrai associativo ri-traducendolo in file json per la chiamata API
header('Content-Type: application/json');

echo json_encode($arrayAssociativo);
