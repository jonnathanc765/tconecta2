@extends('backend.layouts.app')

@section('title', 'Lista de Contactos')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}">
@endsection

@section('content')
    
<div class="container mt-4 mb-5">
    
    <div class="row">
        <div class="col-md-12">
                <h2 class="text-center">Lista de personas que han contactado</h2>

                <div class="card shadow p-2">
                    <table class="table table-hover mt-3 dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha Contacto</th>
                                <th scope="col">Contactado desde</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $client->user }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->contact_date }}</td>
                                    <td>{{ $client->lead }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->comment }}</td>
                                </tr>
                            @endforeach
                        </tbody>
    
                    </table>
                </div>

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