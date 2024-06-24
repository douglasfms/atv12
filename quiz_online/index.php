<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
        include 'conexao.php';
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO quiz_online(nome, email) VALUES('$nome', '$email')";
            if ($conn->query($sql) == TRUE){
                echo "Cadastro realizado com sucesso!";?><br>
                <a href="quiz.php">Iniciar Quiz</a>
                <?php exit();
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
        <input type="submit" value="Cadastrar">
    </form>
    <br>
</body>
</html>