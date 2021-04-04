@extends('layout.main')

@section('titulo')
    <title>Tienda perrona</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Tienda de Bicicletas y accesorios</h1>
    <h5 class="h5 mb-4 text-gray-800 text-center">Encuentra todo lo que necesitas para dibujar en la montaña y carretera</h5>
@endsection

@section('contenido')
<center>
<div class="col-md-7">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="https://i.pinimg.com/originals/cf/06/46/cf0646c79120b733654cc69e456c76c5.jpg" class="d-block w-100" width="100%" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/474x/2f/83/a2/2f83a25965fc3e5385061c8db2178c65.jpg" class="d-block w-100" width="100%" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://esmtb.com/wp-content/uploads/2018/01/megamo_track_5.jpg" class="d-block w-100" width="100%" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br>
    <br><h1>Productos en venta</h1>
    <br>
@if(isset($mensaje))
    <h1 class="text-success text-center">{{$mensaje}}</h1>
    @endif
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach($productos as $producto)
            <div class="col">
                <div class="card">
                    <center>
                    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="max-width: 25rem; max-height: 15rem;" src="{{$producto -> imagen1}}"  class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img style="max-width: 25rem; max-height: 15rem;" src="{{$producto -> imagen2}}"  class="d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    </center>
                    <div class="card-body">
                        <h3 class="card-title">{{$producto -> producto}}</h3>
                        <p class="card-text">{{$producto -> descripcion}}</p>
                        <h5 class="card-title text-info">Disponibles: {{$producto -> stock}}</h5>
                        <h5 class="card-title text-success">Precio: ${{$producto -> precio}} MXN</h5>
                        <form method="post" action="{{route('carrito.agregar')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="idProducto" value="{{$producto->ID}}">
                            @if(isset($sesion))
                                @if($sesion=="iniciada")
                            <input type="hidden" name="idUsuario" value="{{session('usuario')->ID}}">
                                @endif
                            @endif
                            <input type="submit" id="anadir" class="btn btn-warning" value="Añadir al carrito">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</center>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $("#anadir").click(function(){
            $.ajax({
                type:"get",
                url: "{{route('carrito.agregar')}}",
                success: function(data){
                    location.reload();
                }
            });
        });
    </script>

@endsection

