@extends('layouts.app')

@section('title')
    T-Conecta
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('content')

<header data-aos="zoom-in">
    <div class="container-fluid">

        
        <div class="row">

            <div class="col-md-6 col-lg-6 d-flex justify-content-center align-items-end secundary-banner">
                <img src="{{ asset('images/banner-secundario.png') }}" alt="">
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="form">
                    <form action="{{ route('mails.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="inputs">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Ej: Pedro Pérez" name="name">
                                @error('name')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input type="text" value="{{ old('city') }}" class="form-control @error('city')is-invalid @enderror" id="city" placeholder="Ej: Valencia" name="city">
                                @error('city')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" value="{{ old('phone') }}" class="form-control @error('phone')is-invalid @enderror" id="phone" placeholder="Ej: 04121739590" name="phone">
                                @error('phone')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" value="{{ old('email') }}" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Ej: pedroperez@gmail.com" name="email">
                                @error('email')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
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
                <img src="{{ asset('images/internet-siempre.png') }}" alt="">
            </div>
        </div>

        <div class="row mt-4 resources">
            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/A-PRUEBA-DE.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>a prueba de fallas eléctricas</h4>
                    <p>Si tienes planta, tendrás internet.</p>
                </div>
            </div>

            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/SERVICIO-TECNICO.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Servicio técnico garantizado</h4>
                    <p>Atención VIP, con la velocidad que requiere tu negocio.</p>
                </div>
            </div>
           

            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/VELOCIDAD.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Velocidad simétrica</h4>
                    <p>Navega con la misma velocidad de subida y de bajada.</p>
                </div>
            </div>

            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/INCLUYE.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Incluye linea telefónica</h4>
                    <p>Para tus puntos de venta.</p>
                </div>
            </div>
            <div class="col-md-4 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/INSTALACION-EN.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Instalacion en tiempo record</h4>
                    <p>Con todos los equipos incluidos que necesitas para estar conectado.</p>
                </div>
            </div>
            <div class="col-md-4 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/AVALADOS.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Avalado por los grandes</h4>
                    <p>Respaldado por la plataforma de fibra óptica mas grande del país.</p>
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
                        
                        <a href="https://www.facebook.com/Tconectave-2354821491228249/?modal=admin_todo_tour" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true" style="padding: 0.5em 0.75em;"></i>
                            @TCONECTAVE
                        </a>
                        <a href="https://www.instagram.com/tconectave/" target="_blank"> 
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            @TCONECTAVE
                        </a>
                        <a href="bit.ly/2OaVYqO" target="_blank"> 
                            <i class="fa fa-whatsapp" aria-hidden="true" style="margin-right: 33px;"></i>
                            04123038070
                        </a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mt-4">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
@endsection

@section('scripts')
    
    @if ($errors->any())
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        swal('Tenemos un problema...', 'Debe llenar todos los campos correctamente',
            'error');
    </script>
    @endif

@endsection
