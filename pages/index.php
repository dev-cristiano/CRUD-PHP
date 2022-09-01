<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN::WDE PALADAR</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/form-login.css">

<body>
    <form action="valida_usuario.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid shadow p-3 mb-5 bg-body rounded justify-content-end">
            <div class="title">
                <h1 class="font-weight-bold text-gray-900 mb-4 text-center">Login</h1>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Usuário" name="usuario">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Senha</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="******"
                name="senha">
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Relembre me
                </label>
            </div>

            <input type="submit" class="btn btn-primary mt-3" value="Login" id="login" name="login">
            
        </div>
    </form>
</body>

</html>