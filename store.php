<?php

//inviamo a nuova task allo store tramite post salvandola in una variabile
$new_task = $_POST['text'] ?? '';
$response = [];
//se new task non è vuoto 
if($new_task){

    //salviamo nella variabile il contenuto di todos.json
    $todos_json = file_get_contents('./todos.json');

    //traduciamo l'array di oggetti in linguaggio php
    $todos = json_decode($todos_json, true);

    //creiamo il nuovo oggetto da pushare
    $new_obj = [
        'text' => $new_task,
        'done' => false,
    ];

    //pushiamo nell'array
    $todos[] = $new_obj;

    //traduciamo in json
    $todos_json = json_encode($todos);

    //salviamo il nuovo oggetto tradotto
    file_put_contents('./todos.json', $todos_json);

    $response = [
        'success' => true,
        'results' => $todos,
    ];
}else {
    $response = [
        'success' => false,
        'message' => 'task param is required'
    ];
};

header('Content-Type: application/json');
echo json_encode($response);

