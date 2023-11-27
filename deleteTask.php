<?php 

$index = $_POST['index'] ?? '';

$todos_json = file_get_contents('./todos.json');

$todos = json_decode($todos_json, true);

unset($todos[$index]);

$todos_json = json_encode($todos);

file_put_contents('./todos.json', $todos_json);

$response = [
    'success' => true,
    'results' => $todos
];


header('Content-Type: application/json');
echo json_encode($response);
