<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        display: flex;
        justify-content: center;
    }
    form {
        text-align: center;
    }

    img {
        width: 300px;
        margin-bottom: 10px;
    }

</style>

<?php

$id_aluno_alterar = $_GET['id_aluno_alterar'];

var_dump($id_aluno_alterar);

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos = ' . $id_aluno_alterar;

$dados = $banco->query($select)->fetch();

?>

<form action="./aluno-editar.php" method="POST"> 
    <h1>Formulário</h1>

    <img src="./img/<?= $dados['img'] ?>">

    <input type="hidden" placeholder="Id" name="id" value="<?= $dados['id'] ?>">

    <div class="input-group mb-3">
        <input type="text" placeholder="Nome" name="nome" value="<?= $dados['nome'] ?>">
    </div>

    <div class="input-group mb-3">
        <input type="number" placeholder="Telefone" name="telefone" value="<?= $dados['telefone'] ?>">
    </div>

    <div class="input-group mb-3">
        <input type="email" placeholder="Email" name="email" value="<?= $dados['email'] ?>">
    </div>

    <div class="input-group mb-3">
        <input type="date" placeholder="Nascimento" name="nascimento" value="<?= $dados['nascimento'] ?>">
    </div>
    
    <div class="input-group mb-3">
        <label> Frequente? </label>
        <input type="checkbox" name="frequente">
    </div>

    <div class="input-group mb-3">
        <input type="file" accept="image/*" placeholder="Imagem" name="img">
    </div>

    <input type="submit">
</form>