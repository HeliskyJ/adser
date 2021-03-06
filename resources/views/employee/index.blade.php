@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
<div class="hero is-fullheight letter">
        <div class="hero-head">  
                    <div class="container">
                        <div class="column is-2"></div><br><br>
                            <div class="box" id="shad">
                                <div class="title is-2">Empleados</div>
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
                                        <a href="{{ route('employee.create') }}" class="button is-success">Nuevo Empleado</a>
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
                                                @foreach ($employees as $employee)
                                            <tr>
                                                <td><a href="{{ route('employee.show', $employee->id) }}" class="has-text-link">{{ $employee->cui }}</a></td>
                                                <td>{{ $employee->fullname }}</td>
                                                <td><a href="{{ route('employee.edit', $employee->id) }}" class="button is-link is-outlined">
                                                                <span class="icon is-small">
                                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td><form action="{{ route('employee.delete', $employee->id) }}" method="POST">
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
        </div>
    </div>
</div>

@endsection