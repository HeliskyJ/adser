@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
            <div class="column is-2"></div>
                <div class="box">
                    <div class="title is-2">Servicios Pendientes</div>
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
                            <a href="{{ route('receipt.create') }}" class="button is-success">Agendar Servicio</a>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="box">
                        <table class="table is-fullwidth is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($receipts as $receipt)
                                <tr>
                                    <td><a href="{{ route('receipt.show', $receipt->id) }}" class="has-text-link">
                                        SERV{{ str_pad ($receipt->id, 6, '0', STR_PAD_LEFT) }} </div>
                                    </a></td>
                                    <td>{{ $receipt->customer->fullname }}</td>
                                    <td>{{ $receipt->date_service }}</td>
                                    <td><a href="#" class="button is-link is-outlined">
                                                    <span class="icon is-small">
                                                         <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td><form action="#" method="POST">
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