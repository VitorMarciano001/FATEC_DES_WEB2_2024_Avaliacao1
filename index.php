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

  
    <div style="margin-bottom: 10px;" class="d-grid gap-2">
      <h1 style="text-align: center;">Seja bem vindo ao TaskTrack</h1>
      <h3 style="text-align: center;">Vamos logar no sistema?</h3>
    </div>
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
      <div style="margin-top: 10px;" class="d-grid gap-2">
        <p style="text-align: center;">ou</p>
      </div>
      <div  class="d-grid gap-2">
        <a href="pages/verify_solicitations.php" class="btn btn-primary">Verificar solicitações</a>
      </div>
    </form>
  </div>
</body>

</html>