<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Mostrar Animais </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../css/geral.css" rel="stylesheet">
    </head>

    <body>
        <div id="top">
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#top"> Zoo </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#top"> Mostrar </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarAnimais.php"> Cadastrar Animal </a>
                        </li>
                        <?php
                            session_start();
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
            <h1 class="titulo"> Animais </h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Nome </th>
                        <th scope="col"> Idade </th>
                        <th scope="col"> Peso </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../model/crudAnimais.php';
                        $resultados = mostrarAnimais();
                        foreach($resultados as $linha){
                            echo "
                            <tr>
                                <th> $linha[nomanimal] </th>
                                <td> $linha[idadeanimal] Anos </td>
                                <td> $linha[pesoanimal] Quilos </td>
                                <td> <a href='editarAnimais.php?codigo=$linha[codanimal]' class='btn btn-success'> Editar </a> </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>