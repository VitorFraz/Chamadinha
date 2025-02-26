<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<form action="./aluno-cadastrar.php" method="POST"> 
    <h1>Formulário</h1>

    <div class="input-group mb-3">
        <input type="text" placeholder="Nome" name="nome">
    </div>

    <div class="input-group mb-3">
        <input type="number" placeholder="Telefone" name="telefone">
    </div>

    <div class="input-group mb-3">
        <input type="email" placeholder="Email" name="email">
    </div>

    <div class="input-group mb-3">
        <input type="date" placeholder="Nascimento" name="nascimento">
    </div>
    
    <div class="input-group mb-3">
        <label> Frequente? </label>
        <input type="checkbox" name="frequente">
    </div>

    <div class="input-group mb-3">
        <input type="file" accept="image/*" placeholder="Imagem" name="img">
    </div>

    <input type="submit">
</form>