@extends('layouts.app')

@section('content')
<div class="column is-four-fifths">
<div class="hero is-fullheight letter">
        <div class="hero-head">
                    <div class="container"><br><br>
                            <div class="box">
                                <div class="title is-2"> Editar Servicio
                                    <div class="field is-grouped is-grouped-right">
                                    <div class="control">
                                        <a href="#" class="button is-success is-gruped-right">Volver</a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('receipt.update', $receipt[0]->id) }}" method="POST" >
                                @method('PATCH')
                                @csrf
                            <div class="box" style="background-color:#f0f2ef;">
                                <div class="columns">
                                    <div class="column">
                                        <div class="control">
                                            <input type="hidden" id="idcustom" name="customer_id" value="{{ $receipt[0]->customer_id }}">
                                            <input type="text" id='fullname' class="input" value="{{ $receipt[0]->customer->fullname }}">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="control">
                                            <input type="tel" id="number_phone" class="input" value="{{ $receipt[0]->customer->number_phone }}">
                                    </div>
                                    </div>
                                    <div class="column">
                                        <div class="control">
                                            <input type="text" name="address" id="address" class="input" value="{{ $receipt[0]->customer->address }}">
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="box">
                                <div class="columns">
                                    <div class="column is-4">
                                        <div class="control">
                                            <input type="date" name="date_service" class="input" placeholder="Fecha del servicio" id="dat" min="{{ $day= date('Y-m-d') }}" value="{{ $receipt[0]->date_service }}">
                                            <input type="time" name="service_end" value="{{ $receipt[0]->service_end }}">
                                        </div>
                                    </div>
                                    <div class="column is-4">
                                        <div class="control">
                                                <select class="input" name="schedule_id">
                                                    <option selected value="{{ $receipt[0]->schedule_id }}">{{ $receipt[0]->schedule->hour }}</option>
                                            @foreach ($sc as $sch)
                                         <option value="{{ $sch->id }}">{{ $sch->hour }}</option>
                                            @endforeach
                                        </select>     
                                        </div>
                                        </div>
                                    <div class="column is-4">
                                        <div class="control">
                                            <input type="hidden" name="employee_id" id="empId" value="{{ $receipt[0]->employee_id }}">
                                            <input type="text" class="input" id="full" value="{{ $receipt[0]->employee->fullname }}">
                                        </div>
                                    </div>
                                </div>
                                </div><hr>
                            <div class="box" style="background-color:#f0f2ef;">
                                <div class="columns">
                                    <div class="column is-7">
                                        <div class="control">
                                            <input type="hidden" id="idService">
                                            <input type="text"  class="input" id="name" placeholder="Servicio">
                                        </div>
                                    </div>
                                    <div class="column is-2">
                                        <div class="control">
                                            <input type="text" class="input" id="time" placeholder="horas">
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
                                            <input type="text"  class="input" id="price" value="0" readonly>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="column is-1">
                                            <div class="control">
                                                    <a href="#" id="call-btn" class="button is-info"><i class="fa fa-plus"></i></a>
                                                </div>
                                    </div>
                                    </div>
                                </div>
                            <hr>
                            <table class="table is-fullwidth is-hoverable" id="mytable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Servicio</th>
                                        <th>Horas</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receipt[0]->details as $item)
                                    <tr>
                                        <td><a class="button is-danger" id="btnrmv"><i class="fa fa-trash"></i></a></td>
                                        <input type="hidden" name="detail_id[]" value="{{ $item->id }}">
                                        <input  type="hidden" name="service_id[]" class="input" value="{{ $item->service_id }}">
                                        <td> <input id="serv" type="text" class="input" value="{{ $item->service->name }}" readonly></td>
                                        <td> <input id="tim" type="text"  name="durations[]" class="input" value="{{ $item->duration }}" ></td>
                                        <td> <input id="pri" type="text"  name="prices[]" class="input" value="{{ $item->price }}" readonly></td>
                                        <td> <input id="tot" type="text"  name="subtol[]" class="input" value="{{ $item->total }}"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                        <tr>
                                                <td colspan="4" align="center">Total</td>
                                                <td id="total">Q.00</td>
                                            </tr>
                                </tfoot>
                            </table><br>
                            <textarea class="textarea" name="description" rows="2" placeholder="Descripción"></textarea>
                            <hr>
                            <button class="button is-fullwidth is-info is-outlined">Guardar</button>
                        </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function(){

var options = {
	url: function(q) {
		return baseUrl('receipt/findCustomer?q=' +q);
	}, 
    getValue: "fullname",
    list: {

    onSelectItemEvent: function() {
    var value = $("#fullname").getSelectedItemData().number_phone;
    var val = $("#fullname").getSelectedItemData().address;
    var idcustomer = $("#fullname").getSelectedItemData().id;

    $("#number_phone").val(value).trigger("change");
    $("#address").val(val).trigger("change");
    $("#idcustom").val(idcustomer).trigger("change");

}
}
};
$("#fullname").easyAutocomplete(options);
});
        </script>

        <script>
        
$(document).ready(function(){

var options = {
	url: function(q) {
		return baseUrl('receipt/findService?q=' +q);
	}, 
    getValue: "name",
    list: {

    onSelectItemEvent: function() {
    var value = $("#name").getSelectedItemData().price;
    $("#price").val(value).trigger("change");
    var value = $("#name").getSelectedItemData().id;
    $("#idService").val(value).trigger("change");
}
}
};
$("#name").easyAutocomplete(options);

$('#time').keyup(function(){
    $('#total').val(
        parseFloat($('#price').val()) * parseFloat($('#time').val())
        );
});
});
        </script>

<script>
        
        $(document).ready(function(){
        
        var options = {
            url: function(q) {
                return baseUrl('receipt/findEmployee?q=' +q);
            }, 
            getValue: "fullname",
            list:{
                onSelectItemEvent: function(){
                    var idemp= $("#full").getSelectedItemData().id;
                     $("#empId").val(idemp).trigger("change");
                }
            }
        };
        $("#full").easyAutocomplete(options);
        });
                </script>
                <script>
                $(document).ready(function(){

                    $.fn.myFunctionSet = function(){
                        var idSer = $('#idService').val();
                        var service = $('#name').val();
                        var time = $('#time').val();
                        var price = $('#price').val();

                        var total = parseFloat($('#price').val()) * parseFloat($('#time').val());

                        $('<tr><td><a class="button is-danger" id="btnrmv"><i class="fa fa-trash"></i></a></td>'+
                                '<input  type="hidden" name="service_id[]" class="input" value="'+ (idSer)+'" readonly>'+
                                '<td> <input id="serv" type="text" class="input" value="'+ (service)+'" readonly></td>'+
                                '<td> <input id="tim" type="text"  name="durations[]" class="input" value="' + (time)+'" readonly></td>'+
                                '<td> <input id="pri" type="text"  name="prices[]" class="input" value="' + (price)+'" readonly></td>'+
                                '<td> <input id="tot" type="text"  name="subtol[]" class="input" value="' + (total)+'" readonly></td>'+
                            '</tr>').appendTo('table');   
                        }

                    $.fn.myFunctionClear = function(){
                        $('#name').val('');
                        $('#time').val('');
                        $('#price').val(''); 
                    }

                    $.fn.myFunctionCalculate = function(){
                        var subs = 0;

                        var totals = $('#mytable #tot');
                        if(totals.length == 0){
                            $('#total').html(subs);
                        } else {
        
                        $('#mytable #tot').each(function(){
                            subs += parseFloat(($(this).val()));
                        
                        $('#total').html(subs);
                        })
                    }
                    }
                    

                    $('#call-btn').click(function(){
                       
                        $.fn.myFunctionSet();
                        $.fn.myFunctionCalculate();
                        $.fn.myFunctionClear();
                        
                        
                    });

                    	//Eliminar fila.
	                $('#mytable').on('click', '#btnrmv', function(){		
		                $(this).parents('tr').eq(0).remove();
                        $.fn.myFunctionCalculate();
                        });

                });
                
                </script>
                <script>
                $(document).ready(function(){
        var subs = 0;
        $(this).find('#mytable #tot').each(function(){
          var suma = $(this).val();
          if(!isNaN(suma) && suma.length !==0){
            subs += parseFloat(suma);
          }
        });

          $('#total', this).html(subs);
      });       
                </script>

@endsection


