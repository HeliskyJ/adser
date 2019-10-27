@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                    <div class="title is-2"> Servicio Nuevo
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning is-gruped-right">Volver</button>
                        </div>
                    </div>
                </div>
            <form action="{{ route('service.store') }}" method="POST">
                        @csrf

                          <div class="control">
                              <input type="hidden" name="code" value={{ "SERV".date('Y').mt_rand(0,9900) }}>
                          </div>
                      
                        <div class="field">
                            <label for="name" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="name" class="input" placeholder="Limpieza" autofocus required>
                                @error('name')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="price" class="label">Precio</label>
                            <div class="control">
                                <input type="text" name="price" class="input" placeholder="0.000" required>
                                @error('price')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" cols="30" rows="10" class="textarea"></textarea>
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