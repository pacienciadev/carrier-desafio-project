<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link rel="stylesheet" href="/css/style.css">
<title>@yield('title') - Desafio Carrier e-services</title>
</head>
<body>
<!-- Logo e NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/rw_white_150x150.png" width="30" height="30" class="d-inline-block align-top" alt="RafaWorks">
        </a>

        <!-- Links do menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parte 01
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/funcionarios/">Funcionários</a>
                        <a class="dropdown-item" href="/funcionarios/create">Cadastrar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parte 02
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Relatório</a>
                    </div>
                </li>
            </div>
        </div> 
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>
<footer class="mb-5">
    <nav class="navbar justify-content-center fixed-bottom navbar-dark bg-dark">
        <a class="navbar-brand" href="https://laravel.com/docs/5.8" target="_blank" data-toggle="tooltip" data-placement="top" title="Laravel Docs"><small>Link para rêferencia e base de desenvolvimento.</small></a>
        <a class="navbar-brand" href="https://www.facebook.com/urso.ones" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
        <a class="navbar-brand" href="https://www.instagram.com/ursone" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a class="navbar-brand" href="https://www.linkedin.com/in/rafael-eduardo-aa541046/" target="_blank" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a class="navbar-brand" href="https://github.com/Ursones" target="_blank" data-toggle="tooltip" data-placement="top" title="Github"><i class="fab fa-github"></i></a>
    </nav>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>