<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Projeto Integrador</title>

    <!-- CSS  -->
    <link href="../css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <ul id="slide-out" class="side-nav fixed">
        <li>
            <div class="userView center-align">
                <a href="/home"><img id="logo" src="../img/logo-iesb-ead.png"></a>
                @<span>{{ Auth::user()->name }}</span>
            </div>
        </li>
        <li><div class="divider"></div></li>

        <li><a class="waves-effect" href="/tipo-documento">Tipos de Documento</a></li>
        <li><a class="waves-effect" href="">Tipos de Processo</a></li>
        <li><a class="waves-effect" href="">Cursos</a></li>
        <li><a class="waves-effect" href="">Processos</a></li>
        <li><a class="waves-effect" href="">Manual do Sistema</a></li>
        <li class="active red">
            <a href="{{ route('logout') }}" class="waves-effect white-text"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>

    <div class="main">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    @stack('js')

</body>
</html>