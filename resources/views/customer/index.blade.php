@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
            <div class="column is-2"></div>
                <div class="box">
                    <div class="title is-2">Clientes</div>
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
                                    <th>CUI</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($customers as $customer)
                                <tr>
                                    <td><a href="{{ Route('customer.show', $customer->cui) }}" class="has-text-link">{{ $customer->cui }}</a></td>
                                    <td>{{ $customer->fullname }}</td>
                                    <td><a href="{{ Route('customer.edit', $customer->id) }}" class="button is-link is-outlined">
                                                    {{-- <span>Editar</span> --}}
                                                    <span class="icon is-small">
                                                        <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td><form action="{{ Route('customer.delete', $customer->id) }}" method="POST">
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