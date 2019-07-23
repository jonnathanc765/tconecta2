@extends('layouts.app')

@section('title')
    T-Conecta
@endsection

@section('content')

<header data-aos="zoom-in">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-lg-6 d-flex justify-content-center align-items-end secundary-banner">
                <img src="images/banner-secundario.png" alt="">
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form">
                    <div class="alert alert-danger">
                        <ul>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach 
                            @endif
                        </ul>
                    </div>
                    <form action="{{ route('mails.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="inputs">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Ej: Pedro Pérez" name="name">
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input type="text" class="form-control" id="city" placeholder="Ej: Valencia" name="city">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" class="form-control" id="phone" placeholder="Ej: 04121739590" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" class="form-control" id="email" placeholder="Ej: pedroperez@gmail.com" name="email">
                            </div>
                        </div>
                        <div class="button-container">
                            <button type="submit">Contratar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>

<section class="main" data-aos="zoom-in">
    <div class="container">

        <div class="row my-5 img-title">
            <div class="col-md-12 text-center">
                <img src="images/internet-siempre.png" alt="">
            </div>
        </div>

        <div class="row mt-4 resources">
            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="images/icons/A-PRUEBA-DE.png" alt="">
                </div>
                <div class="captions">
                    <h4>a prueba de fallas eléctricas</h4>
                    <p>si tienes plantas, tendrás internet</p>
                </div>
            </div>

            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="images/icons/SERVICIO-TECNICO.png" alt="">
                </div>
                <div class="captions">
                    <h4>Servicio técnico garantizado</h4>
                    <p>Atención VIP, con la velocidad que requiere tu negocio.</p>
                </div>
            </div>
           

            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="images/icons/VELOCIDAD.png" alt="">
                </div>
                <div class="captions">
                    <h4>Velocidad simétrica</h4>
                    <p>Navega con la isma velocidad de subida y de bajada.</p>
                </div>
            </div>

            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="images/icons/INCLUYE.png" alt="">
                </div>
                <div class="captions">
                    <h4>Incluye linea telefónica</h4>
                    <p>Para tus puntos de venta</p>
                </div>
            </div>
            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="images/icons/INSTALACION-EN.png" alt="">
                </div>
                <div class="captions">
                    <h4>Instalacion en tiempo record</h4>
                    <p>Con todos los equipos incluidos que necesitas para estar conectado</p>
                </div>
            </div>
            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="images/icons/AVALADOS.png" alt="">
                </div>
                <div class="captions">
                    <h4>Avalado por los grandes</h4>
                    <p>Respaldado por la plataforma de fibra óptica mas grande del país</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-12 message">
                <h2>¡Contáctanos!</h2>
                <p>
                    Para estar al dia con las novedades de nuestros productos siguenos en las redes sociales
                </p>
            </div>

            <div class="col-md-7 contact">
                <div class="row">
                    <div class="col-md-6 social-links">
                        
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true" style="padding: 0.5em 0.75em;"></i>
                            @TCONECTAVE
                        </a>
                        <a href="#"> 
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            @TCONECTAVE
                        </a>
                        <a href="#"> 
                            <i class="fa fa-whatsapp" aria-hidden="true" style="margin-right: 33px;"></i>
                            04123038070
                        </a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mt-4">
                        <img src="images/logo.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
@endsection


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
