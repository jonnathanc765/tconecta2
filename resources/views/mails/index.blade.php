@extends('layouts.app')

@section('title', 'Lista de Contactos')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}">
@endsection

@section('content')

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" width="30" height="30" alt="">
    </a>
    <form action="{{ route('logout') }}" id="logout-form" method="POST">
        {{ csrf_field() }}
        <a href="#" class="text-white" onclick="getElementById('logout-form').submit()">Cerrar Sesión</a>
    </form>
</nav>
    
<div class="container mt-4 mb-5">
    
    <div class="row">
        <div class="col-md-12">
                <h2 class="text-center">Lista de personas que han contactado</h2>

                <table class="table table-hover mt-3 dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mails as $mail)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mail->name }}</td>
                                <td>{{ $mail->email }}</td>
                                <td>{{ $mail->city }}</td>
                                <td>{{ $mail->phone }}</td>
                                <td>{{ $mail->created_at->format('d/m/Y, h:m') }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
        </div>
    </div>

</div>

@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datatable.min.js') }}"></script>
    <script>

        $(document).ready( function () {
            $('.dataTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                }
            });
        });
    
    </script>
@endsection 