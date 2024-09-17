<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $USER = $_POST["user"];
    $PASSWD = $_POST["passwd"];
    $login_info = [
        "tecnicos" => [
            "tecnicos"
        ],
        "coordenacao" => [
            "coordenacao"
        ]
    ];
   
    
    if(in_array($USER, $login_info['coordenacao']) && in_array($PASSWD, $login_info['coordenacao'])){
        session_start();
        $_SESSION['loggedIn'] = true;
        $_SESSION['userType'] = "coordenador";

        header("Location: ../pages/home_page.php");
        exit;
    } elseif (in_array($USER, $login_info['tecnicos']) && in_array($PASSWD, $login_info['tecnicos'])) {
        session_start();
        $_SESSION['loggedIn'] = true;
        $_SESSION['userType'] = "tecnicos";

        header("Location: ../pages/home_page.php");
        exit;
    }else {
        header("Location: ../index.php");
        exit;
    }
}

?>