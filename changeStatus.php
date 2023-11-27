<?php 

$taskIndex = $_POST['index'] ?? '';
$response = [];

    $todos_json = file_get_contents('./todos.json');

    $todos = json_decode($todos_json, true);
    
    $todos[$taskIndex]['done'] = !$todos[$taskIndex]['done'];
    
    $todos_json = json_encode($todos);
    
    file_put_contents('./todos.json', $todos_json);

    $response = [
        'success' => true,
        'results' => $todos
    ];

header('Content-Type: application/json');
echo json_encode($response);

