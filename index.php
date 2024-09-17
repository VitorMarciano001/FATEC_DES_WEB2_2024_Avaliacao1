<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <form action="controller/login_controller.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input name="passwd" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Entrar</button>
      </div>
    </form>
  </div>
</body>

</html>