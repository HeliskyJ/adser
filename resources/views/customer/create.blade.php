@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                    <div class="title is-2"> Crear Cliente
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning is-gruped-right">Volver</button>
                        </div>
                    </div>
                </div>
                    <form action="">
                        <div class="field">
                            <label for="fullname" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="fullname" class="input" placeholder="Ej. Hely Johana Mendez Molina" autocomplete="off" autofocus required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="cui" class="label">CUI</label>
                            <div class="control">
                                <input type="text" name="cui" class="input" placeholder="Ej. 3385453792007" >
                            </div>
                        </div>

                        <div class="field">
                            <label for="address" class="label">Dirección</label>
                            <div class="control">
                                <input type="text" name="address" class="input" placeholder="Ej. Colinas de Santa Lucia, fase II zona 3" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="phone" class="label">Número de Teléfono</label>
                            <div class="control">
                                <input type="tel" name="phone" class="input" placeholder="Ej. 42037345 o +502 42037345" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="textarea" autocomplete="off"></textarea>
                        </div>

                        <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                  <button class="button is-medium is-success">Crear</button>
                                </div>
                                <div class="control">
                                  <button class="button is-medium is-danger">Cancelar</button>
                                </div>
                              </div>
                    </form>
            
                </div>
            </div>
</div>
</div>

@endsection