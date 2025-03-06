<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

$dsn = 'mysql:dbname=db_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_alunos';

$resultado = $banco->query($select)->fetchAll();


?>
<main class="container my-5">
    <table class="table table-dark table-striped">
        <div class="my-3 d-flex justify-content-end">
            <a href="formulario.php" class="btn btn-success">Cadastrar Novo Aluno</a>
        </div>
        <tr>
            <td class="text-center"> ID </td>
            <td class="text-center"> Nome </td>
            <td class="text-center"> Ações </td>
        </tr>
        <?php foreach ($resultado as $linha) { ?>
            <tr class="text-center">
                <td> <?= $linha['id'] ?> </td>
                <td> <?php echo $linha['nome'] ?> </td>
                <td class="text-center">
                    <a href="ficha.php?id_aluno=<?= $linha['id'] ?>" class="btn btn-primary">Abrir</a>
                    <a href="./formulario-editar.php?id_aluno_alterar=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="./aluno-deletar.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                    
                </td>
            </tr>
        <?php } ?>
    </table>
</main>