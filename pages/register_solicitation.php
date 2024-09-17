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
    <link href="../styles/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <form action="../controller/register_controller.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Laboratorio</label>
                <select class="form-select" name="laboratory" aria-label="Default select example">
                    <option selected>Lista dos laboratorios</option>
                    <option value="Laboratório 1">Laboratório 1</option>
                    <option value="Laboratório 2">Laboratório 2</option>
                    <option value="Laboratório 3">Laboratório 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prazo limite</label>
                <input name="limitDate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Solicitação</label>
                <input name="solicitation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Curso atendido</label>
                <select class="form-select" name="curse" aria-label="Default select example">
                    <option selected>Lista dos cursos</option>
                    <option value="1">DSM</option>
                    <option value="2">GE</option>
                </select>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>