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

            <!-- Button trigger modal -->
            <button type="button my-2 mx-2" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar Nuevo Cliente
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
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