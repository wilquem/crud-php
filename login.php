
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    </style>

    <title>Login</title>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-4 text-center">
            <img class="mb-4 d-block mx-auto" src="bootstrap-5-1.png" alt="Bootstrap Logo" width="80">
            <p class="lead">Abaixo há um exemplo de um formulário feito inteiramente com <span class="text-primary">Bootstrap</span>.</p>
        </div>
    </div>

    <div class="container" >
        <form action="usuarios.php" method="POST" class="mt-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Entrar"></input><br>
            <a  href="http://localhost/form/index.php"><p class="mt-2">Criar uma conta</p></a>
          </form>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>