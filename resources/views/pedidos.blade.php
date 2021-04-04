@extends('layout.main')

@section('titulo')
    <title>Pedidos</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">pedidos de {{session('usuario')->nombre}}</h1>
    <h5 class="h5 mb-4 text-gray-800 text-center">Tus productos llegaran lo antes posible :D</h5>
@endsection

@section('contenido')
    <center>
        <table class="table table-dark table-hover text-center">
            <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">imagen</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"> </td>
                    <td style="background-color: white"> </td>
                    <td style="background-color: white"></td>
                </tr>
                <tr>

                    <td scope="col">{{$pedido -> producto}}</td>
                    <td scope="col">{{$pedido -> descripcion}}</td>
                    <td scope="col">{{$pedido -> precio}}</td>
                    <td scope="col"><img style="max-width: 10rem" src="{{$pedido -> imagen1}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </center>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection

