<?php
$titulo = "raiane";
include "header.php";


if (!empty($_POST)) {
    $mensagem = $_POST['mensagem'];

    if ($mensagem) {
        echo "Obrigada, sera lido com carinho😊";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Olá, meu nome é Raiane Miranda.</h1>
    <h3> Eu sou aluna de TII da turma 2201</h3>
    <ul>
        <li><b>Meus hobbies:</b></li>
        <li>Eu gosto de ler</li>
        <li>Eu gosto de dormir</li>
    </ul>
    <form action="" method="POST">
        <label for="sendme">Mande uma mensagem para mim😉</label>
        <input type="text" name="mensagem" id="sendme" placeholder="Digite aqui">
        <input type="submit" value="Enviar">


    </form>
</body>

<?php
include "footer.php"
?>
</html>