<?php
include('config.php');
/* $nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['genero'];
$estado = $_POST['estado'];
$cidade =  $_POST['cidade'];
$endereco = $_POST['endereco']; */
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
    </style>

    <title>Dashboard</title>
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-4">
            <button type="button" class="btn btn-primary my-4"><a href="newuser.php" class="text-light">Adicionar usuário</a></button>
        </div>
        <h1>Usuários</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = "SELECT * FROM `infousuarios`";
                $sql=mysqli_query($conexao,$result);
                if($sql){
                    while($row=mysqli_fetch_assoc($sql)){
                        $id=$row['id'];
                        $nome=$row['nome'];
                        $email=$row['email'];
                        $senha=$row['senha'];
                        $sexo=$row['sexo'];
                        $estado=$row['estado'];
                        $cidade=$row['cidade'];
                        $endereco=$row['endereco'];
                        echo'<tr>
                        <th scope="col">'.$id.'</th>
                        <th scope="col">'.$nome.'</th>
                        <th scope="col">'.$email.'</th>
                        <th scope="col">'.$senha.'</th>
                        <th scope="col">'.$sexo.'</th>
                        <th scope="col">'.$estado.'</th>
                        <th scope="col">'.$cidade.'</th>
                        <th scope="col">'.$endereco.'</th>
                        <td>
                        <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                        <button class="btn btn-danger"><a class="text-light" href="deletar.php?deletarid='.$id.'">Deletar</a></button>
                        </td>
                    </tr>';
                    }
                }
                ?>

                
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>


</body>

</html>