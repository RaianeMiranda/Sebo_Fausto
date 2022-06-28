<?php
$titulo = "Página ||Contatos";
include "header.php";

/*echo $_POST['nome'];
echo $_POST['idade'];
echo $_POST['endereco'];
echo $_POST['mae'];
echo $_POST['pai'];
echo $_POST['cpf'];*/

if(!empty($_POST)){
print_r($_POST);
}

?>

<div class="container"></div>
<h1>Página de Contato</h1>

<div class="container_control">
    <form action="" method="post">
        <div class="form_control">
            <label for="campo_endereco">Digite seu endereço</label>
            <input id="campo_endereco" type="text" name="endereco" placeholder="Endereço completo">
        </div>
        <div class="form_control">
            <label for="campo_idade">Digite sua idade</label>
            <input id="campo_idade" type="text" name="idade" placeholder="Somente Números">
        </div>
        <div class="form_control">
            <label for="campo_nome">Digite o seu lindo nome</label>
            <input id="campo_nome" type="text" name="nome" placeholder="Nome completo">
        </div>
        <div class="form_control">
            <label for="campo_mae">Digite o nome da sua mãe</label>
            <input id="campo_mae" type="text" name="mae" placeholder="Nome Completo da Mãe">
        </div>
        <div class="form_control">
            <label for="campo_pai">Digite o nome do seu Pai</label>
            <input id="campo_pai" type="text" name="pai" placeholder="Nome completo do Pai">
        </div>
        <div class="form_control">
            <label for="campo_cpf">Digite seu CPF</label>
            <input id="campo_cpf" type="text" name="cpf" placeholder="999.999.999-99">
        </div>
        <input type="submit" value="Enviar">
</div>
</form>