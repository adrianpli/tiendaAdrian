@extends('layout.mainAdmin')

@section('titulo')
    <title>Tienda perrona - productos</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Productos en venta</h1>
@endsection

@section('contenido')
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Registrado</th>
        </tr>
        </thead>
        <tbody>
@foreach($allProductos as $producto)
    <tr>
        <th scope="col">{{$loop -> index + 1}}</th>
        <th scope="col">{{$producto -> producto}}</th>
        <th scope="col">{{$producto -> descripcion}}</th>
        <th scope="col">{{$producto -> precio}}</th>
        <th scope="col">{{$producto -> stock}}</th>
        <th scope="col">{{$producto -> created_at}}</th>
    </tr>
@endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection


