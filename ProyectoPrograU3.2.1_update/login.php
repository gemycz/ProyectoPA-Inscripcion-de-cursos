<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      #login{
        background: url(./img/login.png);
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" id="login">
    <form class="form-signin" method="POST" action="SesionDB.php">
  <img class="mb-4" src="./img/logo2.png" alt="" width="300">
  <h1 class="h3 mb-3 font-weight-normal text-light">Login</h1>
  <div class="form-group">
  <label for="usuario" class="sr-only">Usuario</label>
  <input type="text" id="usuario" class="form-control" name="USER" placeholder="Usuario" required autofocus>
  </div>
  <div class="form-group">
  <label for="contraseña" class="sr-only">Contraseña</label>
  <input type="password" id="contraseña" class="form-control" name="PASSWORD" placeholder="Contraseña" required>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Entrar</button><br>
  <a href="index.html">Home</a>
</form>
</body>
</html>
