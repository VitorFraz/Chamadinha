<?php // abre php

echo '<h1>Aluno-deletar.php<h1>'; // imprime  um cabeçalho (h1)


$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1'; // conexão com o banco de dados
$user = 'root'; // nome do usuário no banco
$password = ''; // senha para acesso do banco

$banco = new PDO($dsn, $user, $password);  //variavel que retorna ao banco

$idFormulario = $_GET['id']; // variável para coletar o valor da string de consulta

//tb_alunos//
$delete = 'DELETE FROM tb_alunos WHERE id = :id'; //delta os dados no banco
$box = $banco->prepare($delete); //prepara os dados para serem deletados
$box->execute([ //executa os dados para serem deletados
    ':id' => $idFormulario  // informação para ser deltada
]); //fecha o delete

//tb_info_alunos//
$delete = 'DELETE FROM tb_info_alunos WHERE id_alunos = :id_alunos';//delta os dados no banco
$box = $banco->prepare($delete); //prepara os dados para serem deletados
$box->execute([ //executa os dados para serem deletados
    ':id_alunos' => $idFormulario // informação para ser deltada
]); //fecha o delete

//twig*
echo '<script> 
    alert("Aluno apagado com sucesso!")
    window.location.replace("index.php")
</script>'; // imprime, cria um pop-up de js
//header('location:index.php');