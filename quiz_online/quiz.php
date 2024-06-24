<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Quiz</h1>
    <form action="envio_post9.php" method="post">
        <label for="q1">Qual a capital do Brasil?</label><br><br>
            <input type="radio" name="q1" value="1">São Paulo</input><br>
            <input type="radio" name="q1" value="2">Rio de Janeiro</input><br>
            <input type="radio" name="q1" value="3">Brasília</input><br>
            <input type="radio" name="q1" value="4">Belo Horizonte</input><br>
            <input type="radio" name="q1" value="5">Paris</input><br>
        <br><br>
        <label for="q2">Qual o menor planeta do sistema solar?</label><br><br>
            <input type="radio" name="q2" value="1">Mercúrio</input><br>
            <input type="radio" name="q2" value="2">Vênus</input><br>
            <input type="radio" name="q2" value="3">Terra</input><br>
            <input type="radio" name="q2" value="4">Marte</input><br>
            <input type="radio" name="q2" value="5">Paris</input>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="index.php">Voltar para cadastro</a><br><br>
    <a href="resultados.php">Mostrar resultados</a>
</body>
</html>