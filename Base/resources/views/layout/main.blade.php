<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" width=100px height=100px href="https://ceisc-storage.s3.amazonaws.com/site/favicon.ico"/>
        <link rel="mask-icon" type="" href="https://ceisc-storage.s3.amazonaws.com/site/favicon.ico" color="#111" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <script src="js/script.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

        <title>CEISC | Eventos</title>








        <!-- FONTES DO GOOGLE-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">



        <!-- CSS DO BOOTSTRAP-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">






        <title>@yield('title')</title>



    </head>

    <body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <table>
                    <tr>
                        <td><img src="/img/logo.bmp" alt="Cursos SEISC"></td>
                        <div class="sonho">
                        <td> <a href="https://ceisc.com.br/" target="_blank">Faça parte dessa Família! Alcançar seu Sonho, é a nossa Motivação! </a></td>
                        </div>
                    </tr>
                </table>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="/" class="nav-link">Listar Eventos</a>
                </li>


                @auth

                <li class="nav-item">
                <a href="/events/create" class="nav-link">Criar Evento</a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Gerenciar Eventos</a>
                </li>

                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout"
                            class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
                @endauth



                @guest
                <!--<li class="nav-item">
                    <a href="/register" class="nav-link">Registrar-se</a>
                </li>-->

                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                @endguest
            </ul>
    </div>
    </nav>
    </header>

        @yield('content')

        <footer>


        <p>Projeto Página de Eventos | &copy; Copyright 2021 </p>
        <div>
         Argemiro D Zacouteguy | Full Stack Júnior | Contato: 51 9 8061-6611 | Linkedin: <a href="https://www.linkedin.com/in/argemiro-zacouteguy-807285179/" target="_blank"> Visualizar Perfil</a>
        </div>

        </footer>

    </body>
</html>
