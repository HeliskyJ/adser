@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
    <div class="container">
        <div class="column is-2"></div><br><br>
<section class="columns is-multiline">
    <div class="column">
        <div class="box notification">
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
            <div class="box notification">
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
            <div class="box notification">
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
</section>
<section class="columns is-multiline"><br>
    <div class="column is-6">
        <article class="message is-dark">
            <div class="message-header">Servicios</div>
            <div class="message-body" style="position:relative;">
                    <div>Hoa</div>
                    </div>
        </article>
    </div>
    <div class="column is-6">
        <article class="message is-dark">
            <div class="message-header">Empleados Activos</div>
            <div class="message-body" style="position:relative;">
                    <div>Hoa</div>
                    </div>
        </article>
    </div>
</section>
</div>
</div>
</div>
@endsection
