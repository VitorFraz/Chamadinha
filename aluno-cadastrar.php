<?php //abre o php
echo '<h1>Cadastro de Aluno</h1>'; // imprimi um cabeçalho (h1)

echo '<pre>'; // imprime um "debug output" (pre)
var_dump( // abre a saída informações sobre uma variável
    $_POST // envia informações
); // fecha o var_dump

$nomeFormulario = $_POST['nome']; // envia informações 
$telefoneFormulario = $_POST['telefone']; // envia informações
$emailFormulario = $_POST['email']; // envia informações
$nascimentoFormulario = $_POST['nascimento']; // envia informações
$frequenteFormulario = $_POST['frequente']; // envia informações
$imgFormulario = $_POST['img']; // envia informações

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1'; // conexão com o banco de dados
$user = 'root'; // nome do usuário no banco
$password = ''; // senha para acesso do banco

$banco = new PDO($dsn, $user, $password); //variavel que retorna ao banco

$insert = 'INSERT INTO tb_alunos (nome) VALUE (:nome)'; //insere os dados colocados ns campos, para o banco de dados
$box = $banco->prepare($insert); // array que prepara tudo o que foi selecionado

$box->execute([ // array que executa tudo o que foi selecionado
    ':nome' => $nomeFormulario // inseri nas informações 
]); // fecha o array

$insert = 'INSERT INTO tb_info_alunos (telefone, email, nascimento, frequente, img) VALUE (:telefone, :email, :nascimento, :frequente, :img)'; //insere os dados colocados ns campos, para o banco de dados

$id_alunos = $banco ->lastInsertId(); // array que prepara tudo o que foi selecionado

$box = $banco->prepare($insert); // array que executa tudo o que foi selecionado

$box->execute([ // array que executa tudo o que foi selecionado
    ':telefone' => $telefoneFormulario, // envia informações
    ':email' => $emailFormulario, // envia informações
    ':nascimento' => $nascimentoFormulario, // envia informações
    ':frequente' => $frequenteFormulario, // envia informações
    ':img' => $imgFormulario // envia informações
]); // fecha o array