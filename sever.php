<?php 

$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);