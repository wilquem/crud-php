<?php 
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];
        $estado = $_POST['estado'];
        $cidade =  $_POST['cidade'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO infousuarios(nome,sobrenome,email,senha,sexo,estado,cidade,endereco) VALUES ('$nome','$sobrenome','$email','$senha','$sexo','$estado','$cidade','$endereco')");
        $sql = header('location:login.php') OR die(mysql_error($conexao));
    }
?>

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
        .active {
            color: red;
        }
    </style>

    <title>Cadastro</title>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-4 text-center">
            <img class="mb-4 d-block mx-auto" src="bootstrap-5-1.png" alt="Bootstrap Logo" width="80">
            <h2>Registre-se</h2>
            <p class="lead">Abaixo há um exemplo de um formulário feito inteiramente com <span class="text-primary">Bootstrap</span>.</p>
        </div>
    </div>

    <div class="container">

        <form class="container-" id="formulario" name="formulario" action="index.php" method="POST">
            <!-- Nome e Sorbenome -->
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome" required>
                    <span class="error"></span>
                </div>
                <div class="col-sm-6">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input id="sobrenome" name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" required>
                    <span class="error"></span>
                </div>
            </div>
            <!-- E-mail -->
            <div class="col mt-2">
                <label for="email" class="form-label">E-mail</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="mail@mail.com" required>
                <span class="error"></span>
            </div>
            <!-- Senha -->
            <div class="row g-3 mt-0.5">
                <div class="col-sm-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input id="senha" name="senha" type="password" class="form-control" placeholder="" required>
                    <span class="error"></span>
                </div>
                <div class="col-sm-6">
                    <label for="senhaConf" class="form-label">Confirmar senha</label>
                    <input id="senhaConf" name="senhaConf" type="password" class="form-control" placeholder="" required>
                    <span class="error"></span>
                </div>
            </div>
            <!-- Genero -->
            <div class="mt-2">
                <label for="">Genêro</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">
                        Feminino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="outro" value="outro" checked>
                    <label class="form-check-label" for="outro">
                        Outro
                    </label>
                </div>
            </div>
            <!-- Localização -->
            <div class="row">
                <div class="col-md-4 mt-2">
                    <!-- Estado -->
                    <label for="estado" class="form-label">Estado</label>
                    <select name="estado" id="estado" class="form-control" required>
                        <option value="" selected>Escolha...</option>
                        <option value="am">AM</option>
                        <option value="ba">BA</option>
                        <option value="mg">MG</option>
                        <option value="rj">RJ</option>
                        <option value="rs">RS</option>
                        <option value="sp">SP</option>
                    </select>
                    <span class="error"></span>
                </div>
                <!-- Cidade -->
                <div class="col-md-4 mt-2">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input id="cidade" name="cidade" type="text" class="form-control" placeholder="" required>
                    <span class="error"></span>
                </div>
                <!-- Endereço -->
                <div class="col-md-4 mt-2">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input id="endereco" name="endereco" type="text" class="form-control" placeholder="" required>
                    <span class="error"></span>
                </div>
            </div>
            <!-- Botão -->
            <div class="d-grid gap-2 col-6 mx-auto mt-4" style="margin-bottom: 5rem;">
                <input class="btn btn-outline-primary" name="submit" id="submit" type="submit" value="Enviar"></input>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="script_index.js"></script>

</body>

</html>