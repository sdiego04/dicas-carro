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
                        <a class="nav-link" href="/home">Listar Veiculos
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
<div class="container">
    <form method="post" action="/formcadastro">
        <div class="container">

            <label for="idmarca" class="form-label">Marca:*</label>
            <input type="text" class="form-control" id="idmarca" name="marca" placeholder="Digite a marca aqui" required>
            <label for="idmodelo" class="form-label">Modelo:*</label>
            <input type="text" class="form-control" id="idmodelo" name="modelo" placeholder="Digite o modelo aqui" REQUIRED>
            <label for="idmodelo" class="form-label">Versão(Opcional):</label>
            <input type="text" class="form-control" id="idversao" name="versao" placeholder="Digite a versão aqui">
        </div>
        <div class="container">
            <label for="iddica" class="form-label">Dica:*</label>
            <textarea class="form-control" id="iddica" rows="3" name="dica" required></textarea>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </div>
        @csrf
    </form>
</div>
</body>
</html>


