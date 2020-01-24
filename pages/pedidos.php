<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meus pedidos</title>
    <link rel="stylesheet" href="./../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="./../node_modules/bootstrap/compiler/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <!-- <<<<<<< HEAD -->
                <ul class="navbar-nav mr-auto ">

                    <li class="nav-item  pr-5">
                        <a class="nav-link" href="./../index.html">
                            <h3>Pizza Planet</h3>
                        </a>
                    </li>
                </ul>


                <form class="form-inline">
                    <a href="pedidos.html" class="btn btn-danger" target="_top">Meus Pedidos</a>
                </form>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row my-5">
            <div class="col-12 text-center my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h2 class=" text-left">Meu(s) pedido(s)</h2>
                        <div class="card my-5" style="width: center;">
                            <div class="card-body text-left">
                                <p class="display-5">Pizza: ------</p>
                                <p class="display-5">Valor: ----</p>
                                <p class="display-5">Quantidade: ----</p>
                            </div>
                        </div>
                        <div class="card" style="width: center;">
                            <div class="card-body text-left">
                                <p class="display-5">Pizza: ------</p>
                                <p class="display-5">Valor: ----</p>
                                <p class="display-5">Quantidade: ----</p>
                            </div>
                        </div>
                    </div>
                    <form class="button my-3 text-right pr-5">
                        <a href="#" class="btn btn-dark">Confirmar pedido</a>
                    </form>
                </div>            
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

<footer class="page-footer font-dark teal pt-4">
    <div class="container">
        <div>
            <div class="footer-copyright text-center text-white">© 2020 Copyright:
                <a>Imagens meramente ilustrativas</a>
            </div>
        </div>
    </div>
</footer>

</html>