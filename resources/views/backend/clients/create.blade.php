@extends('backend.layouts.app')

@section('title', 'Registrar nuevo cliente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">

                <div class="card-body">
                    <h2 class="text-center">Agregar un nuevo Cliente</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('clients.store') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="user">Usuario Instagram</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="user">@</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('user') }}" placeholder="pedro_perez" aria-label="usuario" aria-describedby="usuario" name="user">
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha de contacto</label>
                            <input type="date" class="form-control" name="contact_date" value="{{ old('contact_date') }}" max="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="lead">Contactado desde</label>
                            <select name="lead" id="lead" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Facebook" {{ old('lead') == 'Facebook' ? 'selected': '' }}>Facebook</option>
                                <option value="Instragram" {{ old('lead') == 'Instragram' ? 'selected': '' }}>Instragram</option>
                                <option value="WhatsApp" {{ old('lead') == 'WhatsApp' ? 'selected': '' }}>WhatsApp</option>
                                <option value="DM" {{ old('lead') == 'DM' ? 'selected': '' }}>Mensaje directo</option>
                            </select>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection