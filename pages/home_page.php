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
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="register_solicitation.php" class="btn btn-danger">Registrar solicitação</a>
                    </div>
                    <div class="col order-5">
                        <a href="" class="btn btn-danger">Verificar solicitação por curso</a>
                    </div>
                    <div class="col order-1">
                        <a href="" class="btn btn-danger">Verificar solicitações</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a href="../controller/logout_controller.php" class="btn btn-danger">Sair da conta</a>

</body>

</html>