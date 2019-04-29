<!doctype html>
  <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Ta Automação">
        <meta name="generator" content="Jekyll v3.8.5">

        <title>Area Adminstrativa - Login</title>

        <link rel="stylesheet" href="4-css/bootstrap.min.css">
        <link rel="stylesheet" href="4-css/login.css">
    </head>
    <body>
      <form id="login_form">
        <img class="mb-4" src="7-img/logo.png" alt="Ta Automação">
        <h1 class="h5 mb-2 font-weight-normal">Área Administrativa</h1>
        <label for="inputEmail" class="sr-only">e-mail</label>
        <input type="text" id="inputEmail" class="form-control" name="email" placeholder="E-mail" required autofocus>
        <label for="inputSenha" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Senha" required>
        <div class="checkbox mb-3">
          <label>
            <a href="#">Esqueci minha senha</a>
          </label>
        </div>
        <button class="btn btn-lg btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Ta Automação</p>
      </form>

      <!-- JAVASCRIPT -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      <!-- AJAX -->
      <script src="0-php-framework/Ajax/xhttp.js"></script>
      <script src="2-ajax/test_functions.js"></script>
      <script src="2-ajax/generic.js"></script>
    </body>
  </html>