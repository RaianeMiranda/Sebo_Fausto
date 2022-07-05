<?php
$titulo = "dilema";
include "header.php";

if(!empty($_POST)){
    $numa = $_POST['numa'];
    $numb = $_POST['numb'];
    $numc = $_POST['numc'];
    
    if($numa>60){
        echo "numero A não pode ser maior que 60";
    }
    if ($numb>100 || $numb<0){
        echo "Número B não pode ser maior que 100 ou menor que 0";
    } if ($numc<100 || $numc>200){
        echo "Número C não pode ser maior que 200 ou menor que 100";
    }
}
print_r($_POST);











/*
$titulo="Página|| Dilema";
include "header.php";

$lado1 = "";
$lado2 = "";
$lado3 = "";

if (isset($_GET["calcular"])) {
    if (!empty($_GET['lado1'])) { //IF{Se diferente de vazio, armazeno a informação em uma variável} ELSE {senão diga essa mensagem]
        $lado1 = $_GET['lado1'];
    } else {
        $mensagem = "Lado 1 Vazio";
    }
    if (!empty($_GET['lado2'])) {
        $lado2 = $_GET['lado2'];
    } else {
        $mensagem = "Lado 2 Vazio";
    }
}
if (!empty($_GET['lado3'])) {
    $lado3 = $_GET['lado3'];
} else {
    $mensagem = " Lado 3 Vazio";
}

if (!empty($lado1) && !empty($lado2) && !empty($lado3)) { //Se nenhum formulario estiver vazio prossiga o calculo:
    if ($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado1) {
        $mensagem = "Triângulo Equilátero";
    } else if ($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1) {
        $mensagem = "Triângulo Isoceles";
    } else ($mensagem = "Triângulo Escaleno");
}
echo $mensagem;
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Desafio 02</title>
</head>

<body>
    <h1>Desafio 02</h1>

    <form action="" method="POST">
        <label for="numa">numa:</label>
        <input id="numa" type="text" name="numa" value=<?php echo $numa ?>>

        <label for="numb">numb:</label>
        <input id="numb" type="text" name="numb" value=<?php echo $numb ?>>

        <label for="numc">numc:</label>
        <input id="numc" type="text" name="numc" value=<?php echo $numc ?>>

        <input type="submit" value="Calcular" name="calcular">
    </form>
    
</body>

</html>