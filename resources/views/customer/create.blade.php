@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                        <div class="form-group">
                                @csrf
                    <div class="title is-2"> Crear Cliente
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning is-gruped-right">Volver</button>
                        </div>
                    </div>
                </div>
            <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label for="fullname" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="fullname" class="input" placeholder="Ej. Hely Johana Mendez Molina" autocomplete="off" autofocus required>
                                @error('fullname')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="cui" class="label">CUI</label>
                            <div class="control">
                                <input type="text" name="cui" class="input" placeholder="Ej. 3385453792007" autocomplete="off" required>
                                @error('cui')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="address" class="label">Dirección</label>
                            <div class="control">
                                <input type="text" name="address" class="input" placeholder="Ej. Colinas de Santa Lucia, fase II zona 3" autocomplete="off" required>
                                @error('address')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="number_phone" class="label">Número de Teléfono</label>
                            <div class="control">
                                <input type="tel" name="number_phone" class="input" placeholder="Ej. 42037345 o +502 42037345" autocomplete="off">
                                @error('number_phone')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="textarea" autocomplete="off"></textarea>
                            @error('description')
                            <div class="help is-danger">{{ $message }}</div>
                      @enderror
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

@endsection