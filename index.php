<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
<link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
<title>Inicial</title>

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
                        <a class="nav-link" href="index.html">
                            <h3>Pizza Planet</h3>
                        </a>
                    </li>
                </ul>


                <form class="form-inline">
                    <a href="./pages/pedidos.html" class="btn btn-danger" target="_top">Meus Pedidos</a>
                </form>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">
                <div class="card" style="width: center;">
                    <div class="card-body">
                        <h1 class="display-3">Cardápio:</h1>

                        <div class="card my-5" style="width: center;">
                            <div class="card-body">
                                <img src="./images/pizza_1.jpg" class="rounded float-left" alt="...">
                                <div class="pl-5 my-5">
                                    <h3 class="display-5">Calabresa</h3>
                                    <p>Calabresa fatiada, queijo e molho de tomate sem pele</p>
                                    <p>Valor: R$ 20.00</p>
                                    <select name="estado">
                                        <option value="Selecione"> Quantidade </option>
                                        <option value="um"> 1 </option>
                                        <option value="dois"> 2 </option>
                                        <option value="tres"> 3 </option>
                                    </select>
                                    <form class="button my-3">
                                        <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card my-5" style="width: center;">
                            <div class="card-body">
                                <img src="./images/pizza_2.jpg" class="rounded float-left" alt="...">
                                <div class="pl-5 my-5">
                                    <h3 class="display-5">Portuguesa</h3>
                                    <p>Queijo provolone, manjericão, tomate fatiado e orégano</p>
                                    <p>Valor: R$ 20.00</p>
                                    <select name="estado">
                                        <option value="Selecione"> Quantidade </option>
                                        <option value="um"> 1 </option>
                                        <option value="dois"> 2 </option>
                                        <option value="tres"> 3 </option>
                                    </select>
                                    <form class="button my-3">
                                        <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card my-5" style="width: center;">
                            <div class="card-body">
                                <img src="./images/pizza_5.jpg" class="rounded float-left" alt="...">
                                <div class="pl-5 my-5">
                                    <h3 class="display-5">Vegan tropicália</h3>
                                    <p>Queijo de grão de bico, tomate, tofupiry e Pepperoni Tofurky</p>
                                    <p>Valor: R$ 20.00</p>
                                    <select name="estado">
                                        <option value="Selecione"> Quantidade </option>
                                        <option value="um"> 1 </option>
                                        <option value="dois"> 2 </option>
                                        <option value="tres"> 3 </option>
                                    </select>
                                    <form class="button my-3">
                                        <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="card my-5" style="width: center;">
                            <div class="card-body">
                                <img src="./images/pizza_1.jpg" class="rounded float-left" alt="...">
                                <div class="pl-5 my-5">
                                    <h3 class="display-5">Regional Nordestina</h3>
                                    <p>Carne seca, mussarela, tomate, cebola, champignon</p>
                                    <p>Valor: R$ 20.00</p>
                                    <select name="estado">
                                        <option value="Selecione"> Quantidade </option>
                                        <option value="um"> 1 </option>
                                        <option value="dois"> 2 </option>
                                        <option value="tres"> 3 </option>
                                    </select>
                                    <form class="button my-3">
                                        <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card my-5" style="width: center;">
                            <div class="card-body">
                                <img src="./images/pizza_2.jpg" class="rounded float-left" alt="...">
                                <div class="pl-5 my-5">
                                    <h3 class="display-5">Americana</h3>
                                    <p>Ricota, queijo gorgonzola, milho, bacon em cubos, molho de tomate sem pele</p>
                                    <p>Valor: R$ 20.00</p>
                                    <select name="estado">
                                        <option value="Selecione"> Quantidade </option>
                                        <option value="um"> 1 </option>
                                        <option value="dois"> 2 </option>
                                        <option value="tres"> 3 </option>
                                    </select>
                                    <form class="button my-3">
                                        <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

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