@extends('layouts.app')
@section('content')
<div class="column is-four-fifths">
<div class="hero is-fullheight letter">
        <div class="hero-head">
                    <div class="container"><br><br>
                            <div class="box">
                                    <div class="form-group">
                                <div class="title is-3"> Actualización de información
                                    <div class="field is-grouped is-grouped-right">
                                    <div class="control">
                                            <a href="{{ route('service.index') }}" class="button is-warning is-gruped-right">Volver</a>
                                        </div>
                                </div>
                            </div>
                        <form action="{{ Route('service.update', $service[0]->id) }}" method="POST">
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
                                            <input type="text" name="name" class="input" value="{{ $service[0]->name }}" required>
                                            @error('name')
                                            <div class="help is-danger">{{ $message }}</div>
                                      @enderror
                                        </div>
                                    </div>
            
                                    <div class="field">
                                        <label for="price" class="label">Precio</label>
                                        <div class="control">
                                            <input type="text" name="price" class="input" value="{{ $service[0]->price }}" autocomplete="off" required>
                                            @error('price')
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
        </div>
    </div>
</div>
@endsection