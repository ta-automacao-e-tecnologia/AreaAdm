<?php
    session_start();

    if(!isset($_SESSION['email']))
    {
        header('location: ../../index.php');
    }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Ta Automação">
        <meta name="generator" content="Jekyll v3.8.5">

        <title>Area Adminstrativa - Home</title>

        <link rel="stylesheet" href="../../4-css/bootstrap.min.css">
        <link rel="stylesheet" href="../../4-css/home.css">
    </head>

    <body>
        <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img id="logo" src="../../7-img/logo.png" alt="Ta Automacao" width="75%" height="75%"></a>
            <p id="bem_vindo" class="bem-vindo text-white"><?php echo "Bem vindo " . $_SESSION['email'] ?></p>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../../1-php/logout.php" id='logout'>Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Empresa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Serviços
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Produtos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Clientes
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center text-muted">
                                <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h4">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar"></span>
                                This week
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- AJAX -->
        <script src="../../0-php-framework/Ajax/xhttp.js"></script>
        <script src="../../2-ajax/generic.js"></script>
    </body>
</html>