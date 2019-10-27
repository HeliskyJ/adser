@extends('layouts.app')

@section('content')
<div class="column is-half">
        <div class="container">
                <div class="box">
                    <div class="title is-2"> Agendar Servicio
                        <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning is-gruped-right">Volver</button>
                        </div>
                    </div>
                </div>
                <div class="box" style="background-color:#f0f2ef;">
                    <div class="columns">
                        <div class="column is-half">
                            <div class="contro">
                                <input type="text" class="input" placeholder="Cliente">
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                                <input type="text" class="input" placeholder="Télefono">
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                                <input type="text" class="input" placeholder="Dirección">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="columns">
                        <div class="column is-7">
                            <div class="contro">
                                <input type="text" class="input" placeholder="Servicio">
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="control">
                                <input type="text" class="input" placeholder="Plantas">
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="field has-addons">
                                <div class="control">
                                    <div class="control">
                                        <a class="button is-static">Q.</a>
                                    </div>
                                </div>
                            <div class="control">
                                <input type="text" class="input" placeholder="50.00">
                            </div>
                        </div>
                        </div>
                        <div class="column is-1">
                                <div class="control">
                                        <a href="#" class="button is-info"><i class="fa fa-plus"></i></a>
                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="table is-fullwidth ">
                    <thead>
                        <tr>
                            <th>Servicio</th>
                            <th>Plantas</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Limpieza</td>
                            <td>3</td>
                            <td>150</td>
                        </tr>
                    </tbody>
                </table>
                </div>
        </div>
</div>
</div>
@endsection


