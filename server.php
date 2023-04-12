<?php

$task = file_get_contents(__DIR__.'/data.json');

$task = json_decode($task, true);

$task = json_encode($task);

file_put_contents(__DIR__.'/toDoList.json', $task);

//restituisco content type: json
header('Content-Type: application/json');

//stampo string json 
echo $task;