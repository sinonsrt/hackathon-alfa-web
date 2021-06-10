<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CHERRY Veículos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="collapse bg-dark sobre-container" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>Sobre Nós</h4>
                        <p>Referência em Umuarama no ramo de veículos novos e seminovos a Cherry trabalha com as principais marcas do brasil.
                            A Cherry Veículos vem conquistando ainda mais o público de Umuarama com excelente e personalizado atendimento e também, claro, com a garantia que você procura. Venha conferir.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4>Contato</h4>
                        <ul list-unstyled">
                            <li>Fone: (44)3622-9999</li>
                            <li>E-mail: contato@cherry.com.br</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar main-navbar">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand logo-text d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>CHERRY</strong>
                </a>

                <nav class="nav">
                    <a class="nav-link" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" href="#">INSTITUCIONAL</a>
                    <a class="nav-link" href="/novos">NOVOS</a>
                    <a class="nav-link" href="/seminovos">SEMINOVOS</a>
                </nav>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">

        <div class="container">

            <h2 class="py-5 text-center">@yield('titulo')</h2>

            @yield('content')

        </div>

    </main>

    <footer class="main-footer mt-5">
        <div class="container py-4 text-white text-center">
            Desenvolvido por Carlos Ferreira | Lucas Marchiori | Ayslan Fernandes

            <div class="footer-icons">
                <a href="#"><img src="assets/icons/github.svg"></a>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>
