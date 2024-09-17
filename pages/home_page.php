<?php

session_start();

if (!isset($_SESSION['$userType']) && $_SESSION['loggedIn'] == true) {
    $USER = $_SESSION['userType'];
} else {
    header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Page</title>
</head>

<body>
    <div class="wrapper">
        <div>
            <h1 style="text-align: center;">Welcome <?php echo $USER; ?> </h1>
        </div>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 text-center">
                    <?php
                    if ($USER == "coordenador") {
                        echo '<a href="register_solicitation.php" class="btn btn-danger">Registrar solicitação</a>';
                    }
                    ?>
                </div>
                <div class="col-6 col-sm-4 text-center">
                    <a href="../pages/verify_content_by_course.php" class="btn btn-danger">Verificar solicitação por curso</a>
                </div>
                <div style="margin-top: 10px; margin-bottom: 10px;" class="w-100 d-none d-md-block"></div>
                <div class="col-6 col-sm-4 text-center">
                    <a href="verify_solicitations.php" class="btn btn-danger">Verificar solicitações</a>
                </div>
                <div class="col-6 col-sm-4 text-center">
                    <a href="../controller/logout_controller.php" class="btn btn-danger">Sair da conta</a>
                </div>
            </div>
        </div>
    </div>
</body>


</html>