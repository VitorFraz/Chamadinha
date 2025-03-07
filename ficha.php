<!-- abre o php --> <?php 

$id_aluno = $_GET['id_aluno']; // variável para coletar o valor da string de consulta

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1'; // conexão com o banco de dados
$user = 'root'; // nome do usuário no banco
$password = ''; // senha para acesso do banco

$banco = new PDO($dsn, $user, $password); // variável que retorna ao banco

$select = 'SELECT tb_info_alunos.*, tb_alunos.nome FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos = ' . $id_aluno; // variável que "seleciona tudo da tb_info_alunos procurando pelo id_alunos"


$dados = $banco->query($select)->fetch(); // array que procura oque foi selecionado

?> <!-- fecha o php -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- linka o framework mais recente(versão 5.3.3) do bootstrap-->

<style> /* abre a estilização */
    main{ /* estiliza o conteúdo da pagina */
        display: flex; /* exibe os dados na horizontal */
        flex-direction: column; /* define a direção em  colunas */
        align-items: center; /* alinha os itens no centro */
    } /* fecha a estilização */

    form{/* abre a estilização */
        width: 350px; /* define uma altura determinada */
    }/* fecha a estilização */

    img{/* abre a estilização */
        width:350px;/* define uma altura determinada*/
        object-fit: cover; /* ajusta o comportamento da imagem */
    }/* fecha a estilização */
</style> <!-- fecha a estilização -->

<main class="container text-center my-5"> <!-- abre a área do conteúdo da página -->
    <img src="./img/<?= $dados['img'] ?>" alt="img-perfil" class="img-thumbnail"> <!-- campo que exibe uma imagem na pagina -->

    <form action="#"> <!-- abre um formulário --> 
        <label for="nome">Nome</label> <!-- abre e fecha um rótulo -->
        <input type="text" value="<?= $dados['nome'] ?>" disabled class="form-control"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
        <div class="row mt-2"> <!-- cria e abre uma divisão -->
            <div class="col"> <!-- cria e abre uma outra divisão dentro da divisão anterior -->
                <label for="telefone">Telefone</label> <!-- abre e fecha um rótulo -->
                <input type="number" value="<?php echo $dados['telefone'] ?>" disabled class="form-control"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
            </div> <!-- fecha divisão dentro da divisão anterior -->
        </div> <!-- fecha divisão -->
        <div class="row mt-2"> <!-- cria e abre uma divisão -->
            <div class="col"> <!-- cria e abre uma divisão dentro de uma outra divisão-->
                <label for="email">E-mail</label> <!-- abre e fecha um rótulo -->
                <input type="email" value="<?php echo $dados['email'] ?>" disabled class="form-control"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
            </div> <!-- fecha divisão dentro da divisão anterior -->
        </div> <!-- fecha divisão -->
        <div class="row mt-2"> <!-- cria e abre uma divisão-->
            <div class="col"> <!-- cria e abre uma divisão dentro de uma outra divisão-->
                <label for="data_nascimento">Data de Nascimento</label> <!-- abre e fecha um rótulo -->
                <input type="data" value="<?php echo $dados['nascimento'] ?>" disabled class="form-control"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
            </div><!-- fecha divisão -->
            <div class="col my-4 pt-2"> <!-- cria e abre uma divisão-->
                <label for="frequente">Frequente</label> <!-- abre e fecha um rótulo -->
                <input type="checkbox" class="form-check-input"><!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
            </div> <!-- fecha divisão -->
        </div> <!-- fecha divisão dentro da divisão anterior -->
    </form><!-- fecha o formulário -->
</main> <!-- fecha o conteúdo -->