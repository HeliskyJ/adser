@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
            <div class="column is-2"></div>
                <div class="box">
                    <div class="columns">
                        <div class="column is-9">
                                <div class="title is-2">{{ $customer[0]->cui }} - {{ $customer[0]->fullname }}</div>
                        </div>
                        <div class="column is-3">
                                <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button class="button is-warning">Volver</button>
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
                                    <div class="title is-2" align="center">0 </div>
                                        <p align="center">Servicios Prestados</p>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="box">
                                    <div class="title is-2" align="center">0</div>
                                        <p align="center">Servicios Cancelados</p>
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