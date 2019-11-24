@extends('layouts.app')

@section('content')
<div class="hero is-fullheight letter">
    <div class="hero-body">
    </div>
</div>
<div class="column is-four-fifths">
        <div class="container"><br><br>
                <div class="box">
                        <div class="form-group">
                                @csrf
                    <div class="title is-2"> Empleado Nuevo
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <a href="{{ route('employee.index') }}" class="button is-warning is-gruped-right">Volver</a>
                        </div>
                    </div>
                </div>
            <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label for="fullname" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="fullname" class="input" value="{{ old('fullname') }}" placeholder="Ej. Hely Johana Mendez Molina" autocomplete="off" autofocus required>
                                @error('fullname')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="cui" class="label">CUI</label>
                            <div class="control">
                                <input type="text" name="cui" class="input" value="{{ old('cui') }}" placeholder="Ej. 3385453792007" autocomplete="off" required>
                                @error('cui')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="number_phone" class="label">Número de Teléfono</label>
                            <div class="control">
                                <input type="tel" name="number_phone" class="input" value="{{ old('number_phone') }}" placeholder="Ej. 42037345 o +502 42037345" autocomplete="off">
                                @error('number_phone')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="textarea" autocomplete="off">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="help is-danger">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="control">
                                <input type="checkbox" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">Activo</label>
                        </div>

                        <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                  <button class="button is-medium is-success">Crear</button>
                                </div>
                                <div class="control">
                                  <button class="button is-medium is-danger" type="reset">Cancelar</button>
                                </div>
                              </div>
                    </form>
                        </div>
                </div>
            </div>
</div>
</div>

@endsection