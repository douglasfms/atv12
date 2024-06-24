<?php 
    include 'conexao.php';
    if(!isset($_GET['id'])){
        echo "Usuário não informado!";
        exit();
    }
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $data_atualizacao = date("Y-m-d H:i:s");

        $q = "UPDATE cadastro_simples SET nome='$nome', email='$email', idade='$idade', data_atualizacao='$data_atualizacao' WHERE id='$id'";
        if($conn->query($q)==TRUE){
            echo "Cadastro atualizado com sucesso!";
        }else{
            echo "Erro ao editar";
        }
    }

    $q = "SELECT * FROM cadastro_simples WHERE id ='$id'";
    $resultado = $conn->query($q);

    if($resultado->num_rows <= 0){
        echo "Usuário não encontrado!";
        exit();
    }

    $linha = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
</head>
<body>
    <h2>Editar registro</h2>
    <form action="" method="post">
        Nome: <input type="text" name="nome" value="<?php echo $linha['nome'];?>"><br>
        Email: <input type="text" name="email" value="<?php echo $linha['email'];?>"><br>
        Idade: <input type="text" name="idade" value="<?php echo $linha['idade'];?>"><br>
        <input type="submit" value="Atualizar">
    </form>
    <br>
    <a href="listar.php">Voltar para lista</a> <!-- Link para retornar à página de exibição -->
</body>
</html>