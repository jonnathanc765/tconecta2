<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WL4VTPV');
    </script>
    <!-- End Google Tag Manager -->
 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145131526-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145131526-1');
    </script>


    <title>{{ config('app.name') }} - @yield('title')</title> 
    <meta name="robots" content="index,follow" />
    <meta name="google" content="notranslate" /> 
    <meta name="description" content="TConecta - Internet inalambrico de 20 megas simétrico" />
    <meta name="keywords" content="intenert, inalambrico, simetrico, rapido, veloz conexion, electricidad, interconexión"/>
    <meta name="title" content="{{ config('app.name') }} - @yield('title')" />
    <meta name="language" content="es" />
    <meta name="revisit-after" content="1 week" />
    <meta name="rating" content="General" />
    <meta name="author" content="La Machine" />
    <meta name="owner" content="Tconecta" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="theme-color" content="#f15c22">
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}">


    @yield('head')

</head>
<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WL4VTPV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    @yield('content')
    

    <script src="{{ asset('vendor/axios/axios.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        AOS.init();
    </script>

    @yield('scripts')
    
</body>
</html>
