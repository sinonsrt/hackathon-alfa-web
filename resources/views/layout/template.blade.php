<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cherry Veículos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


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
                    <img src="assets/icons/logo.svg" class="logo">
                    <strong>Cherry</strong>
                </a>

                <nav class="nav">
                    <a class="nav-link" href="/">DESTAQUES</a>
                    <a class="nav-link" href="/novos">NOVOS</a>
                    <a class="nav-link" href="/seminovos">SEMINOVOS</a>
                    <a class="nav-link text-light" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" href="#">SOBRE</a>
                </nav>

                <a href="http://localhost:3000/login" target="blank" class="text-light">
                    <span>Área Restrita</span>
                    <i class="fas fa-lock"></i>
                </a>
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
            <h6 class="mt-3">Desenvolvido por Carlos H. Ferreira | Lucas Marchiori | Ayslan Fernandes</h6>

            <div class="icons-container d-flex justify-content-center mt-3">
                <div class="footer-icons">
                    <a href="https://github.com/sinonsrt/hackathon-alfa-web" target="blank" class="text-light">
                        <img src="assets/icons/github.svg">
                        <p class="py-1">Web</p>
                    </a>
                </div>
                <div class="footer-icons mx-4">
                    <a href="https://github.com/sinonsrt/hackathon-alfa-admin" target="blank" class="text-light">
                        <img src="assets/icons/github.svg">
                        <p class="py-1">Admin</p>
                    </a>
                </div>
                <div class="footer-icons">
                    <a href="https://github.com/ayslanPurunga/hackathon_app_cherry" target="blank" class="text-light">
                        <img src="assets/icons/github.svg">
                        <p class="py-1">App</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
