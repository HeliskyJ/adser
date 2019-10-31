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
                        <div class="column">
                            <div class="control">
                                    <input type="text" id='fullname' name="fullname" class="input" placeholder="Cliente">
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                                <input type="tel" name="number_phone" id="number_phone" class="input" placeholder="Télefono">
                        </div>
                        </div>
                        <div class="column">
                            <div class="control">
                                <input type="text" name="address" id="address" class="input" placeholder="Dirección">
                            </div>
                        </div>
                </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <div class="column is-4">
                            <div class="control">
                                <input type="date" class="input" placeholder="Fecha del servicio">
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="control">
                                    <input list="Horas" class="input">

                                    <datalist id="Horas">
                                      <option value="8:00">
                                      <option value="8:30">
                                      <option value="9:00">
                                      <option value="9:30">
                                      <option value="10:00">
                                      <option value="10:30">
                                      <option value="11:00">
                                      <option value="11:30">
                                      <option value="12:00">
                                      <option value="12:30">
                                      <option value="13:00">
                                      <option value="14:00">  
                                      <option value="15:00">
                                      <option value="15:30">
                                      <option value="16:00">
                                      <option value="16:30">
                                      <option value="17:00">
                                      <option value="17:30">
                                      <option value="18:00">
                                      <option value="18:30">    
                                    </datalist>
                            </div>
                            </div>
                        <div class="column is-4">
                            <div class="control">
                                <input type="text" class="input" id="full" placeholder="Empleado">
                            </div>
                        </div>
                    </div>
                    </div><hr>
                <div class="box" style="background-color:#f0f2ef;">
                    <div class="columns">
                        <div class="column is-7">
                            <div class="control">
                                <input type="text" class="input" id="name" placeholder="Servicio">
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
                                <input type="text" class="input" id="price" value="0.00" readonly>
                            </div>
                        </div>
                        </div>
                        <div class="column is-1">
                                <div class="control">
                                        <button id="call-btn" class="button is-info"><i class="fa fa-plus"></i></button>
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
                    </tbody>
                    <tfoot>
                            <tr>
                                    <td colspan="4" align="center">Total</td>
                                    <td id="total">Q.00</td>
                                </tr>
                    </tfoot>
                </table>
                <button class="button is-fullwidth is-info is-outlined">Guardar</button>
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
    $("#number_phone").val(value).trigger("change");
    $("#address").val(val).trigger("change");
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
        };
        $("#full").easyAutocomplete(options);
        });
                </script>
                <script>
                $(document).ready(function(){

                    $.fn.myFunctionSet = function(){
                        var service = $('#name').val();
                        var time = $('#time').val();
                        var price = $('#price').val();

                        var total = parseFloat($('#price').val()) * parseFloat($('#time').val());

                        $('<tr><td><a href="#" class="button is-danger"><i class="fa fa-trash"></i></a></td>'+
                                '<td id="serv">'+(service)+'</td>'+
                                '<td id="tim">'+ (time) +'</td>'+
                                '<td id="pri">'+ (price) +'</td>'+
                                '<td id="tot">'+ (total) +'</td>'+
                            '</tr>').appendTo('table');   
                        }

                    $.fn.myFunctionClear = function(){
                        $('#name').val('');
                        $('#time').val('');
                        $('#price').val(''); 
                    }

                    $.fn.myFunctionCalculate = function(){
                        var subs = 0;
                        $('#mytable #tot').each(function(){
                            subs += parseFloat(($(this).html()));
                        
                        $('#total').html(subs);
                        })
                    }

                    $('#call-btn').click(function(){
                       
                        $.fn.myFunctionSet();
                        $.fn.myFunctionCalculate();
                        $.fn.myFunctionClear();
                        
                        
                    });
                });
                
                </script>
@endsection


