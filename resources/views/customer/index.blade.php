@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
<div class="hero is-fullheight letter">
    <div class="hero-header">
                <div class="container">
                    <div class="column is-2"></div><br><br>
                        <div class="box" id="shad">
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
                                    <a href="{{ route('customer.create') }}" class="button is-success">Nuevo Cliente</a>
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
                                            <td><a href="{{ Route('customer.show', $customer->id) }}" class="has-text-link">{{ $customer->cui }}</a></td>
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
                            </div><br><br>
                </div>
        </div>   
        
    </div>
</div>
</div>          
@endsection