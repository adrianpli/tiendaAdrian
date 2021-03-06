<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - usuario</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-dark">
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-5 col-lg-12 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent align-items-center">
            <div class="col-lg-10">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h2 text-white mb-4">Iniciar sesion</h1>
                        <h5 class="text-white">Inicia sesion para poder comprar todo lo que quieras</h5>
                    </div>
                    @if(isset($estatus))
                        @if($estatus == "success")
                            <label class="text-success">{{$mensaje}}</label>
                        @elseif($estatus == "error")
                            <label class="text-warning">{{$mensaje}}</label>
                        @endif
                    @endif
                    <form  action="" method="post">
                        {{csrf_field()}}
                        <h1 class="h2 text-white mb-4 text-center">Correo</h1>
                        <div class="form-group">
                            <input style="font-size: 1.2rem; color: black" type="email" class="form-control  form-control-user"
                                   id="exampleInputEmail" aria-describedby="emailHelp"
                                   placeholder="Correo" name="correo" required>
                        </div>
                        <h1 class="h2 text-white mb-4 text-center">Contrase??a</h1>
                        <div class="form-group">
                            <input style="font-size: 1.2rem; color: black" type="password" class=" form-control form-control-user"
                                   id="exampleInputPassword" placeholder="Contrase??a" name="password" required>
                        </div>
                        <input type="submit" style="font-size: 1rem" value="Iniciar Sesion" class="btn btn-info btn-user btn-block">
                        <hr>

                    </form>
                    <hr>
                    <center>
<a class="text-white text-center" href="{{route('registrar')}}">??No tienes cuenta? Registrate aqui</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

</body>

</html>

