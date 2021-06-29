<?php

?>
<html>
<head>
    <title>Eu quero essa vaga</title>
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
                <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Cadastrar-se</a>
                        </li>
            </ul>
        </div>
    </div>
</nav>
</div>
<div id="app">
    <nav class="navbar-center navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <form method="post" action="/">
            <a class="navbar-brand"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav ml-auto mx-auto order-0">

                    <li class="nav-item">
                        <a class="nav-link">Marca:
                            <input type="text" class="form-control" name="marca">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Modelo:
                            <input type="text" class="form-control" name="modelo">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Versão:
                            <input type="text" name="versao" class="form-control">
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link form-control btn-primary" type="submit">Pesquisar</button>
                    </li>

                </ul>
            </div>
                @csrf
            </form>
        </div>
    </nav>
</div>
        @if($menu==1)
            @include('layouts.listarTodosVeiculos')
        @endif
        @if($menu==2)
            @include('layouts.listarMarcaModelo')
        @endif
        @if($menu==3)
            @include('layouts.listarMarcaModelo')
        @endif
        @if($menu==4)
            @include('layouts.listarMarcaModelo')
        @endif
        @if($menu==5)
            @include('layouts.listarMarcaModelo')
        @endif
        @if($menu==6)
            @include('layouts.listarMarcaModelo')
        @endif
        @if($menu==7)
            @include('layouts.listarMarcaModelo')
        @endif
</body>
</html>

