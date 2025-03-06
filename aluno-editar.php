<?php

echo '<h1>Editar Alunos</h1>';



var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];
$editarTelefone = $_POST['telefone'];
$editarEmail = $_POST['email'];
$editarNascimento = $_POST['nascimento'];


$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_info_alunos SET telefone = :telefone, email = :email, nascimento = :nascimento WHERE id_alunos = :id_alunos ';
$update2 = 'UPDATE tb_alunos SET nome = :nome WHERE id= :id ';

$banco->prepare($update2)->execute([
    ':id' => $editarId,
    ':nome' => $editarNome
]);

$banco->prepare($update)->execute([
    ':telefone' => $editarTelefone,
    ':email' => $editarEmail,
    ':nascimento' => $editarNascimento
]);