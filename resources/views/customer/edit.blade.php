@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                        <div class="form-group">
                    <div class="title is-3"> Actualización de información
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <a href="{{ route('customer.index') }}" class="button is-warning is-gruped-right">Volver</a>
                        </div>
                    </div>
                </div>
            <form action="{{ route('customer.update', $customer[0]->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="field">
                            <label for="fullname" class="label">Nombre</label>
                            <div class="control">
                                <input type="text" name="fullname" class="input" value="{{ $customer[0]->fullname }}" required>
                                @error('fullname')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="cui" class="label">CUI</label>
                            <div class="control">
                                <input type="text" name="cui" class="input" value="{{ $customer[0]->cui }}" autocomplete="off" required>
                                @error('cui')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="address" class="label">Dirección</label>
                            <div class="control">
                                <input type="text" name="address" class="input" value="{{ $customer[0]->address }}" autocomplete="off" required>
                                @error('address')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="number_phone" class="label">Número de Teléfono</label>
                            <div class="control">
                                <input type="tel" name="number_phone" class="input" value="{{ $customer[0]->number_phone }}" autocomplete="off">
                                @error('number_phone')
                                <div class="help is-danger">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="10" class="textarea">{{ $customer[0]->description }}</textarea>
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