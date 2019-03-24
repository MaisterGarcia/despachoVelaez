@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 
<style type="text/css">
	body {
  font: 13px verdana;
  font-weight: normal;
}
</style>
@section("body")
	<div id="main">
        <input type="button" id="btAdd" value="Añadir Elemento" class="bt" />
        <input type="button" id="btRemove" value="Eliminar Elemento" class="bt" />
        <input type="button" id="btRemoveAll" value="Eliminar Todo" class="bt" /><br />
    </div>
<!-- <div style="clear:both"></div> -->
@stop

		@section("footer")
		@include("templates.layouts.footer")
		@stop


		@section("script")
			<script>
	$(document).ready(function() {
        var iCnt = 0;

// Crear un elemento div añadiendo estilos CSS
        var container = $(document.createElement('div')).css({
            padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
            borderTopColor: '#999', borderBottomColor: '#999',
            borderLeftColor: '#999', borderRightColor: '#999'
        });

        $('#btAdd').click(function() {
            if (iCnt <= 4) {

                iCnt = iCnt + 1;

                // Añadir caja de texto.
                $(container).append('<input type=text class="input" id=tb' + iCnt + ' ' +
                            'value="Elemento de Texto ' + iCnt + '" />');

                if (iCnt == 1) {   

					 var divSubmit = $(document.createElement('div'));
					                    $(divSubmit).append('<input type=button class="bt" onclick="GetTextValue()"' + 
					                            'id=btSubmit value=Enviar />');

                }

 				$('#main').after(container, divSubmit); 
            }
            else {      //se establece un limite para añadir elementos, 20 es el limite
                
                $(container).append('<label>Limite Alcanzado</label>'); 
                $('#btAdd').attr('class', 'bt-disable'); 
                $('#btAdd').attr('disabled', 'disabled');

            }
        });

        $('#btRemove').click(function() {   // Elimina un elemento por click
            if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
        
            if (iCnt == 0) { $(container).empty(); 
        
                $(container).remove(); 
                $('#btSubmit').remove(); 
                $('#btAdd').removeAttr('disabled'); 
                $('#btAdd').attr('class', 'bt') 

            }
        });

        $('#btRemoveAll').click(function() {    // Elimina todos los elementos del contenedor
        
            $(container).empty(); 
            $(container).remove(); 
            $('#btSubmit').remove(); iCnt = 0; 
            $('#btAdd').removeAttr('disabled'); 
            $('#btAdd').attr('class', 'bt');

        });
    });

    // Obtiene los valores de los textbox al dar click en el boton "Enviar"
    var divValue, values = '';

    function GetTextValue() {

        $(divValue).empty(); 
        $(divValue).remove();
         values = '';


        $('.input').each(function() {
            divValue = $(document.createElement('div')).css({
                padding:'5px', width:'200px'
            });
            values += this.value + '<br />'
            
        });
        $(divValue).append('<p><b>Tus valores añadidos</b></p>' + values);

        $('body').append(divValue);

    }
			</script>
		@stop