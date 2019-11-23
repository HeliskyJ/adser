<div class="columns">
    {{-- <div class="column is-1" id="bodyNav"></div> --}}
    <div class="column is-2 has-background-grey-dark">
            <aside  class="menu"><br>
              <nav class="menu">
                    <p class="menu-label has-text-light">
                      General
                    </p>
                    <ul class="menu-list">
                      <li><a href="{{ route('home') }}" class="is-active has-text-light">
                        <span class="icon is-small">
                          <i class="fa fa-tachometer"></i>
                        </span>
                        Inicio</a></li>
                    </ul>
                    <p class="menu-label has-text-light">
                      Administration
                    </p>
                    <ul class="menu-list">
                        <ul>
                          <li><a class="has-text-light" href="{{ route('service.index') }}">
                            <span class="icon is-small">
                              <i class=" fas fa-hands-helping"></i></span>
                              <font style="vertical-align: inherit;">Servicios</font>
                          </a></li>
                          <li><a class="has-text-light" href="{{ route('employee.index') }}"> 
                            <i class=" fa fa-users" ></i> Empleados</a></li>
                          <li><a class="has-text-light" href="{{ route('customer.index') }}" >
                            <i class="fas fa-street-view"></i> Clientes</a></li>
                          <li><a class="has-text-light " href="{{ route('receipt.create') }}">
                            <i class="fa fa-calendar-alt"></i> Agendar Servicio</a></li>
                        </ul>
                    </ul>
                    <p class="menu-label has-text-light">
                      Configurar
                    </p>
                    <ul class="menu-list">
                      <li><a class="has-text-light">Cuenta</a></li>
                      <li><a class="has-text-light">Transfers</a></li>
                      <li><a class="has-text-light">Balance</a></li>
                    </ul>
                  </nav>
                  </aside><br><br>
    </div>
