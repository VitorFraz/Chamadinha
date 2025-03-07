<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><!-- linka o framework mais recente(versão 5.3.3) do bootstrap-->

<!-- abre a estilização do formulário --> <style>
    body { /* abre e edita a aparência do body da pagina */
        display: flex; /* exibe os dados na horizontal  */
        justify-content: center; /* faz com o conteúdo da página fique centralizado */
    } /* fecha a estilização */
    form { /* abre e edita a aparencia do formulário */
        text-align: center;/* abre e edita a aparencia do formulário */
    }/* fecha a estilização */

    img {/* abre a estilização */
        width: 300px;/* define uma altura determinada*/
        margin-bottom: 10px;/* ajusta o comportamento da imagem */
    }/* fecha a estilização */

</style> <!-- fecha a estilização -->

<?php //abre o php

$id_aluno_alterar = $_GET['id_aluno_alterar']; // variável para coletar o valor da string de consulta

var_dump($id_aluno_alterar); // abre a saída informações sobre uma variável

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';// conexão com o banco de dados
$user = 'root';// nome do usuário no banco
$password = '';// senha para acesso do banco

$banco = new PDO($dsn, $user, $password);//variavel que retorna ao banco

$select = 'SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos = ' . $id_aluno_alterar; //variavel que "seleciona tudo da tb_alunos"

$dados = $banco->query($select)->fetch(); //array que procura o que foi selecionado

?> <!-- fecha o php -->

<form action="./aluno-editar.php" method="POST"> <!-- abre um formulário --> 
    <h1>Formulário</h1> <!-- abre e fecha um cabeçalho -->

    <img src="./img/<?= $dados['img'] ?>"> <!-- campo que exibe uma imagem na pagina -->

    <input type="hidden" placeholder="Id" name="id" value="<?= $dados['id'] ?>"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->

    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <input type="text" placeholder="Nome" name="nome" value="<?= $dados['nome'] ?>"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div><!-- fecha divisão -->

    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <input type="number" placeholder="Telefone" name="telefone" value="<?= $dados['telefone'] ?>"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div><!-- fecha divisão -->

    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <input type="email" placeholder="Email" name="email" value="<?= $dados['email'] ?>"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div><!-- fecha divisão -->

    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <input type="date" placeholder="Nascimento" name="nascimento" value="<?= $dados['nascimento'] ?>"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div><!-- fecha divisão -->
    
    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <label> Frequente? </label>
        <input type="checkbox" name="frequente">
    </div><!-- fecha divisão -->

    <div class="input-group mb-3"><!-- cria e abra uma divisão -->
        <input type="file" accept="image/*" placeholder="Imagem" name="img"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div><!-- fecha divisão -->

    <input type="submit"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
</form><!-- abre um formulário --> 