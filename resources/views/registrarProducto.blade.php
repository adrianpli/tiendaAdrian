@extends('layout.mainAdmin')

@section('titulo')
    <title>Tienda perrona - registrar producto</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Registro de productos</h1>
@endsection

@section('contenido')
<div class="container">
    @if(isset($estado))
        <h1 class="h4 mb-4 text-success text-center">{{$estado}}</h1>
    @endif
    <form action="{{route('registrarproducto.form')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
            <input type="text" name="nombreP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" name="descP" class="form-control" id="exampleInputPassword1">
        </div>
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" name="precio" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen a mostrar 1</label>
            <input type="file" name="img1" class="form-control" accept="image/*">
            @error('img1')
            <small class="text-danger">{{'El archivo no es una imagen'}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen a mostrar 2</label>
            <input type="file" name="img2" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success">Registrar Producto</button>
    </form>
</div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection


