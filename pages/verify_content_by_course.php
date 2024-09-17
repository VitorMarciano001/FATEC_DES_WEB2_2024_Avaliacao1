<?php
include '../utils/get_content_by_course.php';
$dsmContentFromFile = file_get_contents("../database/dsm.txt");
$geContentFromFile = file_get_contents("../database/ge.txt");
$content = getContentByCourse($dsmContentFromFile, $geContentFromFile);


$dsmReadContent = $content['dsm'];
$geReadContent = $content['ge'];

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
    <div style="width: 1000px;" class="container-fluid">
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <h3>Gestão Empresarial</h3>
                </div>
                <ul class="list-group">
                    <?php
                    foreach ($geReadContent as $entry) {
                        echo '<li class="list-group-item">';
                        echo '<strong>Laboratorio:</strong> ' . htmlspecialchars($entry["laboratory"], ENT_QUOTES, 'UTF-8') . '<br>';
                        echo '<strong>Data limite:</strong> ' . htmlspecialchars($entry["limitDate"], ENT_QUOTES, 'UTF-8') . '<br>';
                        echo '<strong>Solicitação:</strong> ' . htmlspecialchars($entry["solicitation"], ENT_QUOTES, 'UTF-8');
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col">
                <div style="text-align: center;">
                    <h3>Desenvolvimento de Software Multiplataforma</h3>
                </div>
                <ul class="list-group">
                    <?php
                    foreach ($dsmReadContent as $entry) {
                        echo '<li class="list-group-item">';
                        echo '<strong>Laboratorio:</strong> ' . htmlspecialchars($entry["laboratory"], ENT_QUOTES, 'UTF-8') . '<br>';
                        echo '<strong>Data limite:</strong> ' . htmlspecialchars($entry["limitDate"], ENT_QUOTES, 'UTF-8') . '<br>';
                        echo '<strong>Solicitação:</strong> ' . htmlspecialchars($entry["solicitation"], ENT_QUOTES, 'UTF-8');
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div style="margin-top: 20px;" class="d-grid gap-2">
            <a href="home_page.php" class="btn btn-primary">Retornar a tela principal</a>
        </div>
    </div>
</body>

</html>