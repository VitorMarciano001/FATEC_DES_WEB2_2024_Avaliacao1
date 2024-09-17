<?php
include '../utils/get_content.php';


session_start();
$btnName = "Pagina inicial";
if(!isset($_SESSION['loggedIn'])){
    $btnName = "Tela de login";
}


$dsmContent = file_get_contents("../database/dsm.txt");
$geContent = file_get_contents("../database/ge.txt");
$handle = array();

getFileContent($dsmContent, $handle);
getFileContent($geContent, $handle);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-sm">
            <div class="d-grid gap-2">
                <h1 style="text-align: center;">Lista de solicitações</h1>
            </div>
        </div>
        <ul class="list-group">
            <?php
            foreach ($handle as $entry) {
                echo '<li class="list-group-item">';
                echo '<strong>Laboratorio:</strong> ' . htmlspecialchars($entry["laboratory"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>Data limite:</strong> ' . htmlspecialchars($entry["limitDate"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>Solicitação:</strong> ' . htmlspecialchars($entry["solicitation"], ENT_QUOTES, 'UTF-8');
                echo '</li>';
            }
            ?>
        </ul>
        <div style="margin-top: 10px;" class="container-sm">
            <div class="d-grid gap-2">
                <a style="text-align: center;" href="../pages/home_page.php" class="btn btn-danger"><?php echo $btnName;?></a>
            </div>
        </div>
    </div>
</body>

</html>