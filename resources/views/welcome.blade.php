@extends('admin.template.main')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, user-scalable-no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <title>Pensionate Colombia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/pensionate (1).ico">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>

            <div class="conteiner-header">
                <div class="logo-title">
                    <img src="img/logo.PNG" alt="">
                    <h6><a href="http://127.0.0.1:8000/">PensionateColombia</a></h6>    
                </div>

            </div>

                        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </header>
            <div class="container-portadas">
                <div class="capa-gradiente"></div>
                <div class="container-detalles"></div>
                    <div class="detalles">
                        <h1>Pensiónate Colombia</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa autem, maiores fugiat magni, fuga corrupti iste numquam nulla suscipit id inventore. Delectus, odit, voluptatum! Perspiciatis debitis, voluptatem vitae obcaecati perferendis.</p>
                        <button>Conocenos y a Nuestro Equipo de Trabajo</button> 
                    </div>
            </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pensiónate Colombia     
                </div>

                <div class="links">
                    <a href="">Apartamentos</a>
                    <a href="">Casas</a>
                    <a href="">Inmuebles en venta</a>
                    <a href="">Pensiones</a>
                    <a href="">Vacaciones y festivos</a>
                </div>
            </div>
        </div>
        <main>
            <article>
                <h1>
                    Conoce como trabajamos y ejemplos de nuestros servicios
                </h1>
                <hr>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor provident ut hic, porro tenetur quos tempore ullam harum ea!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae natus mollitia sed quis, vel numquam, dolore ut dignissimos consectetur eaque quia totam. Maiores nobis tempore atque? Ducimus voluptas corporis pariatur nobis sed sequi, excepturi veritatis aliquam ad! Facere animi earum mollitia, non dolor aliquam necessitatibus beatae eaque, delectus ducimus totam.</p>
            </article>
        </main>
        <main>
            <h1>
                Nuestros Servicios
            </h1>
            <hr>
            <div class="container">
                <div class="card1">
                    <img src="img/barranquillapension.jpg" alt="">
                    <h5>Pensiones</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, cumque.</p>
                    <a href="">leer mas</a>
                </div>
                    <div class="card1">
                    <img src="img/coveñas.png" alt="">
                    <h5>Vacaciones</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, cumque.</p>
                    <a href="">leer mas</a>
                </div>
                    <div class="card1">
                    <img src="img/inmueble.PNG" alt="">
                    <h5>Inmuebles</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, cumque.</p>
                    <a href="">leer mas</a>
                </div>
                    <div class="card1">
                    <img src="img/apartamento.PNG" alt="">
                    <h5>Apartamentos</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, cumque.</p>
                    <a href="">leer mas</a>
                </div>
            </div>
        </main>
    </body>
</html>
