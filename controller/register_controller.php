<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $laboratory = $_POST['laboratory'];
    $limitDate = $_POST['limitDate'];
    $solicitation = $_POST['solicitation'];
    $curse = $_POST['curse'];
    $cla = "";
    $dsmFileName = "../database/dsm.txt";
    $geFileName = "../database/ge.txt";


    if ((int)$curse == 1) {
        echo file_get_contents($dsmFileName);
        file_put_contents($dsmFileName, "$laboratory | $limitDate | $solicitation\n", FILE_APPEND);
        header("Location: ../pages/home_page.php");
        exit;
    } else {
        file_put_contents($geFileName, "$laboratory | $limitDate | $solicitation\n", FILE_APPEND);
        header("Location: ../pages/home_page.php");
        exit;
    }
}

