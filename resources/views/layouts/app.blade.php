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


    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2595809650463956');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=2595809650463956&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->


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

    <script>
        fbq('track', 'CompleteRegistration');
    </script>
    
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
