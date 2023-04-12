<?php
// params
$newTask = isset($_POST["newTask"]) ? $_POST["newTask"] : NULL;
// reads json file
$toDoList = file_get_contents(__DIR__.'/data.json');

// add a new task to the List
if ($newTask !== NULL) {
    $toDoList = json_decode($toDoList, true);
    $toDoList[] = [
        "text" => $newTask,
        "done" => true,
    ];

    // compiles into a new json
    $toDoList = json_encode($toDoList);
    file_put_contents(__DIR__.'/toDoList.json', $toDoList);
};


//returns content type: json
header('Content-Type: application/json');

//print json string
echo $toDoList;