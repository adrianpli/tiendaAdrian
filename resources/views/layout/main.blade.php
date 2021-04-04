<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
@yield('titulo')
<!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Tienda Adridios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                @if(isset($sesion))
                    @if($sesion=="iniciada")
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('inicio.iniciado')}}">Inicio</a>
                        </li>
                    @endif
                @if($sesion=="cerrada")
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Inicio</a>
                </li>
                        @endif
                @endif


@if(isset($sesion))
                @if($sesion=="iniciada")
                        <li class="nav-item">
                           <form method="post" action="{{route('carrito')}}">
                               {{csrf_field()}}
                               <input type="hidden" name="id" value="{{session('usuario')->ID}}">
                               <input class="nav-link bg-transparent border-0" type="submit" value="Carrito">
                           </form>

                        </li>
                            <li class="nav-item">
                                <form method="post" action="{{route('pedidos')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{session('usuario')->ID}}">
                                    <input class="nav-link bg-transparent border-0" type="submit" value="Pedidos">
                                </form>

                            </li>
                    <li class="nav-item">
                        <a class="nav-link">{{Session('usuario')->nombre}}</a>
                    </li>
                    <li class="nav-item">
                        <a disabled class="nav-link" href="{{route('cerrarSesion')}}">Cerrar sesion</a>
                    </li>
                @endif

                @if($sesion=="cerrada")
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('loginadmin')}}">Administrador</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Iniciar sesion</a>
                    </li>
                @endif
@endif

            </ul>
        </div>
    </div>
</nav>
<div class="container-xl">
@yield('titulo-pagina')

@yield('contenido')


</div>
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>
@yield('js')
</body>

</html>
