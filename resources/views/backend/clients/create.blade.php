@extends('backend.layouts.app')

@section('title', 'Crear cliente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="modal-body">
                <div class="form-group">
                    <label for="user">Usuario Instagram</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="user">Usuario Instagram</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="user">Usuario Instagram</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="lead">Contactado desde</label>
                    <select name="lead" id="lead">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instragram">Instragram</option>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="DM">Mensaje directo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="user">Usuario Instagram</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <button type="submit">Agregar</button>
            </div>
        </div>
    </div>
</div>