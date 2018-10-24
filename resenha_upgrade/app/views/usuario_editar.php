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

    <div class="container">

        <h1>Editar Usuário</h1>

        <form method="post" action="./usuario.php?acao=atualizar">

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <div class="form-group">
                <label for="name">Nome</label>
                <input value="<?= $dados_user['nome'] ?>" name="nome" type="text" class="form-control" id="name"  placeholder="digite seu nome">
            </div>


            <div class="form-group">
                <label for="email">E-mail</label>
                <input value="<?= $dados_user['email'] ?>" name="email" type="email" class="form-control" id="email"  placeholder="digite seu email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?= $dados_user['senha'] ?>" name="senha" type="password" class="form-control" id="password" placeholder="digite sua senha">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

</body>
</html>