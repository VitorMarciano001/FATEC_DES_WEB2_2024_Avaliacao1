<?php

// $dsmContent = file_get_contents("../database/dsm.txt");
// $geContent = file_get_contents("../database/ge.txt");
// $handle = array();

// getFileContent($dsmContent, $handle);
// getFileContent($geContent, $handle);
// foreach ($handle as $key => $value) {
//     echo $key . "<br>";
//     echo $value['limitDate'] . "<br>";
// }



function getFileContent($content, &$handle) {
    $lines = explode("\n", trim($content));
    foreach ($lines as $line) {
        $items = explode("|", $line);
    
        $handle[] = [
            "laboratory" => $items[0],
            "limitDate" => $items[1],
            "solicitation" => $items[2]
        ];
    }
    
}
?>