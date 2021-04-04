@extends('layout.mainAdmin')

@section('titulo')
    <title>Tienda perrona</title>
@endsection

@section('css')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Bienvenido {{Session('usuario')->nombre}}</h1>

@endsection

@section('contenido')

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">

        <div class="card" style="width: 18rem;">
            <a href="{{route('registrarproducto')}}" class="text-light" style="text-decoration: none">
            <img src="https://www.tumarcafacil.com/wp-content/uploads/2017/06/RegistroDeMarca-01-1.png" class="card-img-top" alt="...">
            <div class="card-body  bg-dark">
                <h5 class="card-title text-center">Registrar Productos</h5>
            </div>
        </div>
                </a>
        </div>

            <div class="col">
                <div class="card" style="width: 13.7rem;">
                    <a href="{{route('verClientes')}}" class="text-light" style="text-decoration: none">
                        <img src="storage/app/public/monito.png" class="card-img-top" alt="...">
                        <div class="card-body  bg-dark">
                            <h5 class="card-title text-center">Clientes</h5>
                        </div>
                </div>
                </a>
            </div>
            <div class="col">
        <div class="card" style="width: 13.7rem;">
            <a href="{{route('verPedidos')}}" class="text-light" style="text-decoration: none">
            <img src="https://image.flaticon.com/icons/png/512/107/107831.png" class="card-img-top" alt="...">
            <div class="card-body  bg-dark">
                <h5 class="card-title text-center">Pedidos</h5>
            </div>
        </div>
                </a>
        </div>
    </div>
    </div>
</div>
@endsection

@section('js')
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
            <script src="/vendor/datatables/jquery.dataTables.min.js"></script>

            <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection


