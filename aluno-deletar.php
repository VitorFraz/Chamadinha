<?php

echo '<h1>Aluno-deletar.php<h1>';

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idFormulario = $_GET['id'];

//tb_alunos//
$delete = 'DELETE FROM tb_alunos WHERE id = :id';
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idFormulario
]);

//tb_info_alunos//
$delete = 'DELETE FROM tb_info_alunos WHERE id_alunos = :id_alunos';
$box = $banco->prepare($delete);
$box->execute([
    ':id_alunos' => $idFormulario
]);

//twig*
echo '<script> 
    alert("Aluno apagado com sucesso!")
    window.location.replace("index.php")
</script>';
//header('location:index.php');