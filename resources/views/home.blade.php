@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
<section class="hero is-fullheight letter">
    <div class="hero-head"><br>
            <div class="container">
        <section class="columns is-multiline">
            <div class="column">
                <div class="box notification is-warning">
                        @if ($record == 1)
                        <span class="heading has-text-centered"> Servicio Prestado</span>
                        @else
                        <span class="heading has-text-centered">Servicios Prestados</span>
                        @endif
                    <span class="title">{{ $record }}</span>
                    <div class="level">
                        <div class="level-item">
                            <div>
                                <div class="heading">Porcentaje</div>
                                <div class="title is-5">1%</div>
                            </div>
                        </div>
                        <div class="level-item">
                              <div>
                                <div class="heading">Porcentaje</div>
                                <div class="title is-5">45%</div>
                            </div>
                        </div>
                        <div class="level-item">
                            <div>
                                <div class="heading">Porcentaje</div>
                                <div class="title is-5">45%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                    <div class="box notification is-primary">
                            @if ($pending == 1)
                            <span class="heading has-text-centered"> Servicio Pendiente</span>
                            @else
                            <span class="heading has-text-centered">Servicios Pendientes</span>
                            @endif
                        <span class="title">{{ $pending }}</span>
                        <div class="level">
                            <div class="level-item">
                                <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                            <div class="level-item">
                                  <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                            <div class="level-item">
                                <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="column">
                    <div class="box notification has-background-info" id="backBox">
                            @if ($cancel == 1)
                            <span class="heading has-text-centered"> Servicio Cancelado</span>
                            @else
                            <span class="heading has-text-centered">Servicios Cancelados</span>
                            @endif
                        <span class="title">{{ $cancel }}</span>
                        <div class="level">
                            <div class="level-item">
                                <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                            <div class="level-item">
                                  <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                            <div class="level-item">
                                <div>
                                    <div class="heading">Porcentaje</div>
                                    <div class="title is-5">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><br>
        <section class="columns is-multiline"><br>
            <div class="column is-9">
                <article class="message is-dark">
                    <div class="message-header">SERVICIOS PARA HOY</div>
                    <div class="message-body ScrollStyle" style="position:relative;">
                        <table class="table is-fullwidth is-striped is-hoverable">
                            <thead>
                                <th>Hora Inicio</th>
                                <th>Hora Fin</th>
                                <th>Empleado</th>
                                <th>Dirección</th>
                            </thead>
                            <tbody>
                                @foreach ($now as $item)
                                    <tr>
                                        <td>{{ $item->schedule->hour }}</td>
                                        <td>{{ $item->service_end }}</td>
                                        <td>{{ $item->employee->fullname }}</td>
                                        <td>{{ $item->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                            </div>
                </article>
            </div>
            <div class="column is-3">
                <article class="message is-dark">
                    <div class="message-header"></div>
                    <div class="message-body" style="position:relative;">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('images/today.png') }}" width="80" alt="MES">
                                    </figure>
                                </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <small>En </small><strong class="is-size-5">Noviembre</strong>
                                        <br>
                                        15 Servicios
                                    </p>
                                </div>
                            </div>
                            </article>
                        </div>
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('images/year.png') }}" width="80" alt="AÑO">
                                    </figure>
                                </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <small>En </small><strong class="is-size-5">2019</strong>
                                        <br>
                                       13 Servicios 
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-64x64">
                                    <img src="{{ asset('images/client.png') }}" width="80"  alt="CLIENTES">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong class="is-size-5">Clientes</strong>
                                        <br>
                                        {{ $ctotal }}  
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-64x64">
                                    <img src="{{ asset('images/male.png') }}" width="80" alt="COLABORADORES">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong class="is-size-5">Empleados</strong>
                                        <br>
                                        {{ $etotal }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </article>
        </div>
    </section>
 </div>
</section>
    
</div>
    </div>
</div>
@endsection
