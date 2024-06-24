<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
        include 'conexao.php';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;

        $sql = "INSERT INTO cadastro_simples(nome, email, idade, data_cadastro, data_atualizacao, status) VALUES('$nome', '$email', '$idade', '$data_cadastro', '$data_atualizacao', '$status')";
            if ($conn->query($sql) == TRUE){
                echo "Cadastro realizado com sucesso!";
            }else{
                echo "Erro ao inserir registro". $conn->error;
            };
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir novo registro</title>
</head>
<body>
    <h2>Inserir novo registro</h2>
    <form action="" method="post">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="text" name="email"><br>
        Idade: <input type="text" name="idade"><br>
        <input type="submit" value="Inserir">
    </form>
    <br>
    <a href="listar.php">Voltar para lista</a>
</body>
</html>