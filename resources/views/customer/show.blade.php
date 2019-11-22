@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
        <div class="container">
            <div class="column is-2"></div><br><br>
                <div class="box">
                    <div class="columns">
                        <div class="column is-9">
                                <div class="title is-2">{{ $customer[0]->cui }} - {{ $customer[0]->fullname }}</div>
                        </div>
                        <div class="column is-3">
                                <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <a href="{{ route('customer.index') }}" class="button is-warning">Volver</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="menu">
                            <ul class="menu-list">
                                    <li>
                                      <a>Dirección</a>
                                      <ul>
                                        <li><a>{{ $customer[0]->address }}</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                  <ul class="menu-list">
                                        <li>
                                          <a>Teléfono</a>
                                          <ul>
                                            <li><a>{{ $customer[0]->number_phone }}</a></li>
                                          </ul>
                                        </li>
                                      </ul>
                                      <ul class="menu-list">
                                            <li>
                                              <a>Descripción</a>
                                              <ul>
                                                <li><a>{{ $customer[0]->description }}</a></li>
                                              </ul>
                                            </li>
                                          </ul>
                    </div>
                    <div class="box">
                        <br><br>
                        <div class="columns">
                            <div class="column is-6">
                                <div class="box">
                                    <div class="title is-2" align="center">{{ $record }} </div>
                                    @if ( $record == 1)
                                    <p align="center">Servicio Prestado</p>  
                                    @else
                                        <p align="center">Servicios Prestados</p>
                                    @endif
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="box">
                                    <div class="title is-2" align="center">{{ $cancel }}</div>
                                    @if ($cancel == 1)
                                    <p align="center">Servicio Cancelado</p>
                                    @else
                                    <p align="center">Servicios Cancelados</p> 
                                    @endif
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                    </div>
                </div>
        </div>
</div>
</div>
@endsection