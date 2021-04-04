<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@yield('titulo')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #sidebar {
            width: 20%;
            height: 100vh;
            background: #343a40;
        }
    </style>
    @yield('css')
</head>

<body>
<div class="d-flex">
    <div id="sidebar">
        <div class="p-2">
            <a href="#" class="navbar-brand text-center text-light w-100 p-4 border-bottom">
                Administrador {{Session('usuario')->nombre}}
            </a>
        </div>
        <div id="sidebar-accordion" class="accordion">
            <div class="list-group">
                <a href="#dashboard-items" data-toggle="collapse" aria-expanded="false"
                   class="list-group-item list-group-item-action bg-dark text-light">
                </a>

                <a  data-toggle="collapse" aria-expanded="false"
                   class="list-group-item list-group-item-action bg-dark text-light">
                    <a href="{{route("verProductos")}}" class="list-group-item bg-dark text-light"><i class="fa fa-book mr-3" aria-hidden="true"></i>Productos</a>
                </a>

                <a href="{{route('verPedidos')}}" class="list-group-item list-group-item-action bg-dark text-light">
                    <i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i>Pedidos
                </a>

                <a href="{{route('verClientes')}}" class="list-group-item list-group-item-action bg-dark text-light">
                    <i class="fa fa-user mr-3" aria-hidden="true"></i>Clientes
                </a>


            </div>
        </div>
    </div>
    <div class="content w-100 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-xl">
                <a class="navbar-brand" href="#">Administracion de tienda</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07XL">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('inicioAdmin')}}">Menu <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cerrarSesion')}}">Cerrar sesion</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <section class="p-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @yield('titulo-pagina')

                        @yield('contenido')
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
@yield('js')
</body>

</html>
