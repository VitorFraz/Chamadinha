<?php
echo '<h1>Cadastro de Aluno</h1>';

echo '<pre>';
var_dump(
    $_POST
);

$telefoneFormulario = $_POST['telefone'];
$emailFormulario = $_POST['email'];
$nascimentoFormulario = $_POST['nascimento'];
$frequenteFormulario = $_POST['frequente'];
$imgFormulario = $_POST['img'];

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_info_alunos (telefone, email, nascimento, frequente, id_aluno, img) VALUE (:telefone,:email,:nascimento,:frequente,:id_aluno,:img)';

$id_aluno = $banco ->lastInsertId();

$box = $banco->prepare($insert);

$box->execute([
    ':telefone' => $telefoneFormulario,
    ':email' => $emailFormulario,
    ':nascimento' => $nascimentoFormulario,
    ':frequente' => $frequenteFormulario,
    ':id_alunos' => $id_aluno,
    ':img' => $imgFormulario
]);