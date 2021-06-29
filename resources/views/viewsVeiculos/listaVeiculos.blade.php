<?php

?>
<html>
<head><title>Cadastro</title>
    <script src="jquery/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="app">
    <nav class="navbar-center navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav ml-auto mx-auto order-0">
                    <li class="nav-item">
                        <form method="get">
                            <a class="nav-link" href="">Novo Veiculo</a>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Listar Veiculos
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <?php
    if($lista==true){
    foreach ($lista as $item){
    ?>
    <form method="post" class="form-control">
        <div class="row g-2">
            <div class="col-sm input-group">
                <span class="input-group-text">Marca</span>
                <input type="text" class="form-control input-group" placeholder="{{$item->marca}}" aria-label="City">
            </div>
            <div class="col-sm input-group">
                <span class="input-group-text">Modelo</span>
                <input type="text" class="form-control" placeholder="{{$item->modelo}}" aria-label="State">
            </div>
            <div class="col-sm input-group">
                <span class="input-group-text">Versão</span>
                <input type="text" class="form-control" placeholder="{{$item->versao}}" aria-label="Zip">
            </div>
        </div>
        <div class="container">
            <ul></ul>
        </div>
        <div class="row g-3">

            <div class="col-sm-12 input-group">
                <span class="input-group-text">Dica</span>
                <input class="form-control" placeholder="{{$item->dica}}">
            </div>
            <div class="col-sm input-group" >
                <button class="input-group btn-warning form-control">Alterar</button>
            </div>
            <div class="col-sm  input-group">
                <button class="input-group btn-danger form-control">Excluir</button>
            </div>


        </div>
    </form>
    <?php
        }
    }
    ?>
</div>
</body>
</html>


