<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Cadastrar Animais </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../css/geral.css" rel="stylesheet">
    </head>

    <body>
        <?
            session_start();
            if(!isset($_SESSION['nome'])){
                header("Location: fazerLogin.php");
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
                            <a class="nav-link" href="cadastrarAnimais.php"> Cadastrar Animal </a>
                        </li>
                        <?php
                            if(isset( $_SESSION["nome"])){
                                $nome = $_SESSION["nome"];
                                echo "<li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    $nome
                                </a>
                                <ul class='dropdown-menu'>
                                    <form method='POST' action='../control/controleUsuario.php'>
                                        <li><button type='submit' name='opcao' value='Sair' class='dropdown-item'> Sair </button></li>
                                    </form>
                                </ul>
                                </li>";
                            }
                            else{
                                echo "<li class='nav-item'>
                                    <a class='nav-link' href='fazerLogin.php'> Entrar </a>
                                </li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="container">
            <h1 class="titulo"> Editar Animal </h1>
            <?php
                include '../model/crudAnimais.php';
                $codigo = $_GET['codigo'];
                $resultados = mostrarAnimaisEdt($codigo);
                foreach ($resultados as $linha);
            ?>
            <form method="POST" action="../control/controleAnimais.php">
                <div class="mb-3">
                    <label for="nome" class="form-label"> Nome do animal </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $linha['nomanimal'] ?>">
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label"> Idade do animal </label>
                    <input type="number" class="form-control" id="idade" name="idade" value="<?= $linha['idadeanimal'] ?>">
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label"> Peso do animal </label>
                    <input type="number" step="0.1" class="form-control" id="peso" name="peso" value="<?= $linha['pesoanimal'] ?>">
                </div>
                <input type="hidden" name="codigo" value="<?= $linha['codanimal'] ?>">
                <button type="submit" class="btn btn-primary" name="opcao" value="Alterar"> Alterar </button>
                <button type="submit" class="btn btn-danger" name="opcao" value="Excluir"> Excluir </button>
                <a href="mostrarAnimais.php" class="btn btn-secondary"> Cancelar </a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>