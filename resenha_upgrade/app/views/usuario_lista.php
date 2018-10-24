<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container" style="margin-top: 35px;">

        <h1>Listagem de Usuários</h1>

        <a class="btn btn-primary" href="/2info3/resenha_upgrade_2info3/resenha_upgrade/app/controllers/usuario.php?acao=cadastrar">cadastrar</a>

        <table class="table" style="margin-top: 25px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th>açoes</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($listaUsuarios as $usuario): ?>
                <tr>
                    <th scope="row"><?= $usuario['id'] ?></th>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="http://localhost/2info3/resenha_upgrade_2info3/resenha_upgrade/app/controllers/usuario.php?acao=editar&id=<?= $usuario['id'] ?>">editar</a>
                        <a href="http://localhost/2info3/resenha_upgrade_2info3/resenha_upgrade/app/controllers/usuario.php?acao=excluir&id=<?= $usuario['id'] ?>">excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</body>
</html>