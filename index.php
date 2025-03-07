<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- linka o framework mais recente(versão 5.3.3) do bootstrap-->


<!-- abre o php --> <?php

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1'; // conexão com o banco de dados
$user = 'root'; // nome do usuário no banco
$password = ''; // senha para acesso do banco

$banco = new PDO($dsn, $user, $password); //variavel que retorna ao banco

$select = 'SELECT * FROM tb_alunos'; //variavel que "seleciona tudo da tb_alunos"

$resultado = $banco->query($select)->fetchAll(); // array que procura tudo oque foi selecionado


?> <!-- fecha o php-->
<main class="container my-5"> <!-- abre a área do conteúdo da página -->
    <table class="table table-dark table-striped"> <!-- cria uma tabela  -->
        <div class="my-3 d-flex justify-content-end"> <!-- cria e abra uma divisão -->
            <a href="formulario.php" class="btn btn-success">Cadastrar Novo Aluno</a> <!-- um link para um botão para um outro arquivo php -->
        </div> <!-- fecha divisão -->
        <tr> <!-- define e abre uma linha (row) na tabela (table) -->
            <td class="text-center"> ID </td> <!-- define um dado na tabela (table) -->
            <td class="text-center"> Nome </td> <!-- define um dado na tabela (table) -->
            <td class="text-center"> Ações </td> <!-- define um dado na tabela (table) -->
        </tr> <!-- fecha a linha (row) -->
        <?php foreach ($resultado as $linha) { ?>  <!-- abre e fecha o php na mesma linha; o foreach chama uma função para cada elemento em um array -->
            <tr class="text-center"> <!-- define e abre uma linha (row) na tabela (table) -->
                <td> <?= $linha['id'] ?> </td> <!-- define um dado na tabela (table), guarda a informação do array -->
                <td> <?php echo $linha['nome'] ?> </td> <!-- define um dado na tabela (table), echo para imprimir na tela o dado -->
                <td class="text-center"> <!-- define um dado na tabela (table) com uma class definida-->
                    <a href="ficha.php?id_aluno=<?= $linha['id'] ?>" class="btn btn-primary">Abrir</a><!-- um link para um botão para um outro arquivo php -->
                    <a href="./formulario-editar.php?id_aluno_alterar=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a><!-- um link para um botão para um outro arquivo php -->
                    <a href="./aluno-deletar.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a><!-- um link para um botão para um outro arquivo php -->
                </td> <!-- fecha o dado na tabela, por causa disso, possui uma class -->
            </tr> <!-- fecha a linha (row) -->
        <?php } ?> <!-- fecha o php -->
    </table> <!-- fecha a tabela -->
</main> <!-- fecha o conteúdo -->