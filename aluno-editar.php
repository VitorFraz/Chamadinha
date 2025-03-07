<?php // abre php

echo '<h1>Editar Alunos</h1>'; // imprime  um cabeçalho (h1)



var_dump($_POST);// abre a saída informações sobre uma variável

$editarId = $_POST['id']; // envia informações
$editarNome = $_POST['nome'];// envia informações
$editarTelefone = $_POST['telefone'];// envia informações
$editarEmail = $_POST['email'];// envia informações
$editarNascimento = $_POST['nascimento'];// envia informações


$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';// conexão com o banco de dados
$user = 'root';// nome do usuário no banco
$password = '';// senha para acesso do banco

$banco = new PDO($dsn, $user, $password);//variavel que retorna ao banco

$update = 'UPDATE tb_info_alunos SET telefone = :telefone, email = :email, nascimento = :nascimento WHERE id = :id ';
$update2 = 'UPDATE tb_alunos SET nome = :nome WHERE id= :id';

$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':telefone' => $editarTelefone,
    ':email' => $editarEmail,
    ':nascimento' => $editarNascimento
]);

$banco->prepare($update2)->execute([
    ':id' => $editarId,
    ':nome' => $editarNome
]);