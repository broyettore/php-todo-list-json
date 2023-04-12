<?php

$languages = file_get_contents(__DIR__.'/data.json');

$languages = json_decode($languages, true);

$languages = json_encode($languages);

file_put_contents(__DIR__.'/toDoList.json', $languages);

//restituisco content type: json
header('Content-Type: application/json');

//stampo string json 
echo $languages;