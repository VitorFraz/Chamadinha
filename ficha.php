<?php

$id_aluno = $_GET['id_aluno'];

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos = ' . $id_aluno;

$dados = $banco->query($select)->fetch();





?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form{
        width: 350px;
    }

    img{
        width:350px;
        object-fit: cover;
    }
</style>

<main class="container text-center my-5">
    <img src="./img/<?= $dados['img'] ?>" alt="img-perfil" class="img-thumbnail">

    <form action="#">
        <label for="nome">Nome</label>
        <input type="text" value="<?= $dados['nome'] ?>" disabled class="form-control">
        <div class="row mt-2">
            <div class="col">
                <label for="telefone">Telefone</label>
                <input type="number" value="<?php echo $dados['telefone'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="email">E-mail</label>
                <input type="email" value="<?php echo $dados['email'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="data" value="<?php echo $dados['nascimento'] ?>" disabled class="form-control">
            </div>
            <div class="col my-4 pt-2">
                <label for="frequente">Frequente</label>
                <input type="checkbox" class="form-check-input">
            </div>
        </div>
    </form>
</main>