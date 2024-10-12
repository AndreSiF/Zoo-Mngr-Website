<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Sign Up </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../css/geral.css" rel="stylesheet">
    </head>

    <body>
        <?php
            session_start();
            if (isset($_SESSION["nome"])){
                header("Location: mostrarAnimais.php");
            }
        ?>
        <div id="top">
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="mostrarAnimais.php"> Zoo </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="mostrarAnimais.php"> Mostrar </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#top"> Cadastrar Animal </a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='fazerLogin.php'> Entrar </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="container">
            <h1 class="titulo"> Cadastrar </h1>
            <form method="POST" action="../control/controleUsuario.php">
                <div class="mb-3">
                    <label for="nome" class="form-label"> Nome de usuário </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label"> Senha </label>
                    <input type="text" class="form-control" id="senha" name="senha">
                </div>
                <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar"> Sign Up </button>
                <a class="btn btn-secondary" href="fazerLogin.php"> Entrar </a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    
</html>