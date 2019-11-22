<div class="columns">
    {{-- <div class="column is-1" id="bodyNav"></div> --}}
    <div class="column is-2 has-background-grey-dark">
            <aside  class="menu"><br>
                    <p class="menu-label has-text-light">
                      General
                    </p>
                    <ul class="menu-list">
                      <li><a class="has-text-light">Inicio</a></li>
                    </ul>
                    <p class="menu-label has-text-light">
                      Administration
                    </p>
                    <ul class="menu-list">
                      <li>
                        <ul>
                          <li><a class="has-text-light fas fa-hands-helping" href="{{ route('service.index') }}"> Servicios</a></li>
                          <li><a class="has-text-light fa fa-hourglass" href="#"> Horarios</a></li>
                          <li><a class="has-text-light fa fa-users" href="{{ route('employee.index') }}"> Empleados</a></li>
                          <li><a class="has-text-light fas fa-street-view" href="{{ route('customer.index') }}" > Clientes</a></li>
                        </ul>
                      </li>
                    </ul>
                    <p class="menu-label has-text-light">
                      Configurar
                    </p>
                    <ul class="menu-list">
                      <li><a class="has-text-light">Cuenta</a></li>
                      <li><a class="has-text-light">Transfers</a></li>
                      <li><a class="has-text-light">Balance</a></li>
                    </ul>
                  </aside><br><br>
    </div>
