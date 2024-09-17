<?php


function getContentByCourse($content1, $content2)
{
    $handle = array();
    $handle['dsm'] = array();
    $handle['ge'] = array();
    // reading data from dsm.txt
    $linesContent1 = explode("\n", trim($content1));
    foreach ($linesContent1 as $line) {
        $items = explode("|", $line);
        $handle['dsm'][] = [
            "laboratory" => $items[0],
            "limitDate" => $items[1],
            "solicitation" => $items[2]
        ];
    }

    // reading data from ge.txt
    $linesContent2 = explode("\n", trim($content2));
    foreach ($linesContent2 as $line) {
        $items1 = explode("|", $line);
        $handle['ge'][] = [
            "laboratory" => $items1[0],
            "limitDate" => $items1[1],
            "solicitation" => $items1[2]
        ];
    }
    return $handle;
}
