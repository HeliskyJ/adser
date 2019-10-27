@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                        <div class="form-group">
                    <div class="title is-3"> Actualización de información
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning is-gruped-right">Volver</button>
                        </div>
                    </div>
                </div>
            <form action="#" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="field">
                            <label for="code" class="label">Código</label>
                            <div class="control">
                                <input type="text" class="input" disabled value="{{ $service[0]->code }}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="name" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="fullname" class="input" value="{{ $service[0]->name }}" required>
                                @error('fullname')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="cui" class="label">Precio</label>
                            <div class="control">
                                <input type="number" name="price" class="input" value="{{ $service[0]->price }}" autocomplete="off" required>
                                @error('cui')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>


                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="textarea">{{ $service[0]->description }}</textarea>
                            @error('description')
                            <div class="help is-danger">{{ $message }}</div>
                      @enderror
                        </div>

                        <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                  <button class="button is-medium is-success">Actualizar</button>
                                </div>
                                <div class="control">
                                  <button class="button is-medium is-danger" type="reset">Restablecer</button>
                                </div>
                              </div>
                    </form>
            
                </div>
            </div>
</div>
</div>

@endsection