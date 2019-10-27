@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
            <div class="column is-2"></div>
                <div class="box">
                    <div class="title is-2">Servicios</div>
                    <div class="columns">
                        <div class="column is-half">
                    <div class="box">
                        <hr>
                        <div class="field">
                                <div class="control has-icons-left">
                                  <input class="input is-medium" type="search" placeholder="Buscar">
                                  <span class="icon is-small is-left">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                </div>
                              </div>
                    </div>
                    </div>
                    <div class="column">
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning">Volver</button>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="box">
                        <table class="table is-fullwidth is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($services as $service)
                                <tr>
                                    <td><a href="{{ Route('service.show', $service->code) }}" class="has-text-link">{{ $service->code }}</a></td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->price }}</td>
                                    <td><a href="{{ route('service.edit', $service->id) }}" class="button is-link is-outlined">
                                                    {{-- <span>Editar</span> --}}
                                                    <span class="icon is-small">
                                                        <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td><form action="" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="button is-danger ">
                                            <span class="icon is-small">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                    </form>
                                    </td>
                                </tr>
                                    @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    </div>
        </div>
</div>              
@endsection