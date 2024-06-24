<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
        include 'conexao.php';
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $id = $_POST['id'];
        $sql = "INSERT INTO quiz_online(q1, q2) VALUES('$q1', '$q2') WHERE id='$id'";
            if ($conn->query($sql) == TRUE){
                
            }else{
                
            };
    }
?>


<?php
    $q1_certo = 3;
    $q2_certo = 1;
    $i = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {              
        $q1 = htmlspecialchars($_POST['q1']);  
        $q2 = htmlspecialchars($_POST['q2']);  
        if($q1 == $q1_certo){
            $i++;
        }
        if($q2 == $q2_certo){
            $i++;
        }
    } 
    else{
        echo "<h1>Acesso Inválido</h1>";
        echo "<p>Por favor, envie o formulário corretamente.</p>";      
    }
    echo "Respostas salvas";
?>