@extends('backend.layouts.app')

@section('nav.clients', 'active')
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
                            <label for="phone">Cuidad</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}">
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
                                <option value="Instagram" {{ old('lead') == 'Instagram' ? 'selected': '' }}>Instagram</option>
                                <option value="WhatsApp" {{ old('lead') == 'WhatsApp' ? 'selected': '' }}>WhatsApp</option>
                                <option value="DM" {{ old('lead') == 'DM' ? 'selected': '' }}>Mensaje directo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Contactar DM" {{ old('status') == 'Contactar DM' ? 'selected': '' }}>Por contactar DM</option>
                                <option value="Datos DM" {{ old('status') == 'Datos DM' ? 'selected': '' }}>Datos solicitados por DM</option>
                                <option value="Contactar WhatsApp" {{ old('status') == 'Contactar WhatsApp' ? 'selected': '' }}>Por contactar WhatsApp</option>
                                <option value="Datos WhatsApp" {{ old('status') == 'Datos WhatsApp' ? 'selected': '' }}>Datos solicitados por WhatsApp</option>
                                <option value="Enviar Correo" {{ old('status') == 'Enviar Correo' ? 'selected': '' }}>Poir enviar Email</option>
                                <option value="Por Llamar" {{ old('status') == 'Por Llamar' ? 'selected': '' }}>Por llamar</option>
                                <option value="Llamado Interesado" {{ old('status') == 'Llamado Interesado' ? 'selected': '' }}>Llamado interesado</option>
                                <option value="Llamado desinteresado" {{ old('status') == 'Llamado desinteresado' ? 'selected': '' }}>Llamado no interesado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comentarios</label>
                            <textarea name="comment" class="form-control" id="comment" cols="10" rows="10">{{ old('comment') }}</textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection