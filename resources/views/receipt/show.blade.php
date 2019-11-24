@extends('layouts.app')

@section('content')
<div class="hero is-fullheight letter">
    <div class="hero-body">
    </div>
</div>
<div class="column is-four-fifths">
        <div class="container">
            <div class="column is-2"></div><br><br>
                <div class="box">
                    <div class="columns">
                        <div class="column is-9">
                                <div class="title is-2">
                                SERV{{ str_pad ($receipt[0]->receipt->id, 6, '0', STR_PAD_LEFT) }} - {{ $receipt[0]->receipt->employee->fullname }} </div>
                        </div>
                        <div class="column is-3">
                                <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                          <a href="{{ route('receipt.create') }}" class="button is-success is-gruped-right">Agendar Servicio</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="menu">
                            <ul class="menu-list">
                                    <li>
                                      <a>Cliente:</a>
                                      <ul>
                                        <li><a><b>{{ $receipt[0]->receipt->customer->fullname }}</b></a></li>
                                      </ul>
                                    </li>
                                  </ul>
                            <ul class="menu-list">
                              <li>
                                  <a>Dirección:</a>
                                    <ul>
                                     <li><a>{{ $receipt[0]->receipt->customer->address }}</a></li>
                                    </ul>
                              </li>
                           </ul>
                           <ul class="menu-list">
                              <li>
                                  <a>Teléfono:</a>
                                    <ul>
                                     <li><a>{{ $receipt[0]->receipt->customer->number_phone }}</a></li>
                                    </ul>
                              </li>
                           </ul>
                           <ul class="menu-list">
                              <li>
                                  <a>Descripción:</a>
                                    <ul>
                                     <li><a>{{ $receipt[0]->receipt->description }}</a></li>
                                    </ul>
                              </li>
                           </ul>
                           <div align="right">{{date('d F Y', strtotime( $receipt[0]->receipt->date_service)). ' a las ' . $receipt[0]->receipt->schedule->hour }}</div>
                           <div class="box">
                             <table class="table is-fullwidth is-hoverable" id="mytable">
                               <thead>
                               <tr>
                                 <th>Servicio</th>
                                 <th>C/hr</th>
                                 <th>Precio</th>
                                 <th>Subtotal</th>
                               </tr>
                              </thead>
                              <tbody>
                                @foreach ($receipt as $item)
                                <tr>
                                    <td>{{ $item->service->name }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td id="tot">{{ $item->total }}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td colspan="3" align="center">Total</td>
                                  <td id="total">Q.00</td>
                              </tr>
                              </tfoot>
                             </table>
                           </div>
                    </div>
                    <div class="columns">
                    </div>
                </div>
        </div>
</div>
</div>
<script>
$(document).ready(function(){
        var subs = 0;
        $(this).find('#mytable #tot').each(function(){
          var suma = $(this).text();
          if(!isNaN(suma) && suma.length !==0){
            subs += parseFloat(suma);
          }
        });

          $('#total', this).html(subs);
      });            

</script>
@endsection