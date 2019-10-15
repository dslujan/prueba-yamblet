<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('plugin/jquery/js/jquery-3.4.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugin/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <title>@yield('title', 'Default')</title>
</head>
<body>
    <section>
        <div class="container"> <!-- start container -->
            <div class ="page-header">
                <div class="row">
                    <div class="col-md-5"> <!-- logo -->
                        <h3>LOGO</h3>
                    </div> 
                    <div class="col-md-7">
                        <h3> Api StarWars </h3>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Home</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                        <p class="navbar-text">Aqui va el numero de la pagina</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar navbar-default">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                @yield('table')
                </div>
            </div>

        </div> <!-- end container -->
       
    </section>
