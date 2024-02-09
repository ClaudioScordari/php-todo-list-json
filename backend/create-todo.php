<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Test riuscito - ti stampa il dato
var_dump($_POST);

/*
    Modifico il file json
*/

// Ottengo prima il contenuto in stringa
$jsonString = file_get_contents('todo.json', true);

// Devo decomporla per modificarla - quindi mi creo array associativo
$arrayDati = json_decode($jsonString);

// Mi creo il mio oggetto/dato da pushare
$newTodoData = [
    'task' => $_POST['task'],
    'completed' => false
];

// Adesso pusho questo dato tra l'array dei dati
$arrayDati[] = $newTodoData;

// Mi ritrasformo l'array di dati in una stringa json
$finaljsonString = json_encode($arrayDati);

// Adesso mi scrivo nel file json il vero contenuto
file_put_contents('todo.json', $finaljsonString);
