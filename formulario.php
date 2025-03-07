<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- linka a estilização CSS mais recente(versão 5.3.3) do bootstrap-->

<!-- abre a estilização do formulário --> <style>

    body {  /* abre e edita a aparência do body da pagina */
        display: flex; /* exibe os dados na horizontal  */
        justify-content: center; /* faz com o conteúdo da página fique centralizado */
    } /* fecha a estilização */
    form { /* abre e edita a aparencia do formulário */
        text-align: center; /* alinha no centro o elementos de texto*/
    } /* fecha a estilização */

</style>  <!-- fecha a estilização -->

<form action="./aluno-cadastrar.php" method="POST">  <!-- abre um formulário --> 
    <h1>Formulário</h1>  <!-- abre e fecha um cabeçalho -->

    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <input type="text" placeholder="Nome" name="nome">  <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div> <!-- fecha divisão -->

    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <input type="number" placeholder="Telefone" name="telefone"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados --> 
    </div> <!-- fecha divisão -->

    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <input type="email" placeholder="Email" name="email"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div> <!-- fecha divisão -->

    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <input type="date" placeholder="Nascimento" name="nascimento"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div> <!-- fecha divisão -->
    
    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <label> Frequente? </label> <!-- abre e fecha um rótulo -->
        <input type="checkbox" name="frequente"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div> <!-- fecha divisão -->

    <div class="input-group mb-3"> <!-- cria e abra uma divisão -->
        <input type="file" accept="image/*" placeholder="Imagem" name="img"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
    </div> <!-- fecha divisão -->

    <input type="submit"> <!--uma tag que especifica um campo de entrada onde o usuário pode inserir dados -->
</form>  <!-- fecha o formulário -->