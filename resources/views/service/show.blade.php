@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
            <div class="column is-2"></div>
                <div class="box">
                    <div class="columns">
                        <div class="column is-9">
                                <div class="title is-2">{{ $service[0]->code }} - {{ $service[0]->name }}</div>
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
                                      <a>Precio</a>
                                      <ul>
                                        <li><a><b>{{ $service[0]->price }}</b></a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                      <ul class="menu-list">
                                            <li>
                                              <a>Descripción</a>
                                              <ul>
                                                <li><a>{{ $service[0]->description }}</a></li>
                                              </ul>
                                            </li>
                                          </ul>
                    </div>
                    <div class="columns">
                    </div>
                </div>
        </div>
</div>
</div>

@endsection