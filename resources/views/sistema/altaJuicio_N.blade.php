@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Alta Juicio</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="{{asset('js/retraccion_juicio.js')}}"></script>
<script>
    $(document).on('click', '#boton6', function(){
        var i = 0;
        var num_juicio = $("#num_juicio").val();
        var id_TipoJuicio = $('select[name="id_TipoJuicio"] option:selected').val();
        var fecha = document.getElementById("datepicker").value.split("/");
        var fechaPres = fecha.reverse().join("-");
        var nomDem = $("#nomQuejoso").val();
        nomDem = nomDem.split(" ",2)
        var appDem = $("#AppQuejoso").val();
        var apmDem = $("#ApmQuejoso").val();
        var  abogado1 = $("#campo1").val();
        abogado1=abogado1.split(" ",4) 
        var  abogado2 = $("#campo2").val();
        var  abogado3 = $("#campo3").val();
        if(abogado2==undefined){
            abogado2 = "(NULL)";
        }
        else{
            abogado2 = abogado2.split(" ",4)
        }
        if(abogado3==undefined){
            abogado3 = "(NULL)";
        }
        else{
            abogado3 = abogado3.split(" ",4)
        }
        var descJui = $("#exampleFormControlTextarea5").val();
        descJui = descJui.split(" ",200)
        var  demandado1 = $("#deman1").val();
        demandado1 = demandado1.split(" ",10)
        var  demandado2 = $("#deman2").val();
        var  demandado3 = $("#deman3").val();
        if(demandado2==undefined){
            demandado2 = "(NULL)";
        }
        else{
            demandado2 = demandado2.split(" ",10)
        }
        if(demandado3==undefined){
            demandado3 = "(NULL)";
        }
        else{
            demandado3 = demandado3.split(" ",10)
        }
        var tipFeRa = $('input:radio[name=optradio]:checked').val();
        var fecha = document.getElementById("datepicker2").value.split("/");
        var fechaCeleb = fecha.reverse().join("-");
        if(fechaCeleb == ""){
            fechaCeleb = "(NULL)";
        }
        var fecha = document.getElementById("datepicker3").value.split("/");
        var fechaIni = fecha.reverse().join("-");
        if(fechaIni == ""){
            fechaIni = "(NULL)"
        }
        var fecha = document.getElementById("datepicker4").value.split("/");
        var fechaFin = fecha.reverse().join("-");
        if(fechaFin == ""){
            fechaFin = "(NULL)";
        }
        var tipFeDif = $('input:radio[name=optradio2]:checked').val();
        
        if(tipFeDif == undefined && tipFeRa != 3){
            tipFeRa = tipFeRa;
            fechaIni = "(NULL)";
            fechaFin = "(NULL)";
        }
        else{
            tipFeRa = tipFeDif; 
        }
        if(tipFeRa == 5 && fechaIni == "(NULL)" && fechaFin == "(NULL)"){
            i = i + 1;
            alert('Se Necesitan Llenar los Dos Campos de Fechas ¡VERIFICAR!');
            
        }
        if(tipFeRa == undefined){
            tipFeRa = 3;
        }
        if(i==0){
            $("#pintar").load('{{url('altaJuicio_N')}}' + '?num_juicio=' + num_juicio + '&id_TipoJuicio=' + id_TipoJuicio +
                                                            '&fechaPres=' + fechaPres + '&nomDem=' + nomDem + '&appDem=' + appDem +
                                                            '&apmDem=' + apmDem + '&abogado1='+ abogado1+ '&abogado2=' + 
                                                             abogado2 + '&abogado3=' + abogado3 +'&descJui=' + descJui + '&demandado1=' + demandado1 +
                                                             '&demandado2=' + demandado2 + '&demandado3=' + demandado3 + '&tipFeRa=' +
                                                              tipFeRa +'&fechaCeleb=' + fechaCeleb + '&fechaIni=' + fechaIni + '&fechaFin=' + fechaFin);
        }   
         
    });
</script>
<link href="{{asset('css/botones.css')}}" rel="stylesheet" >

@section("body")

<div class="row">
        <div class="container col-12">
            <div class="card" >
                    <div class="card-header">
                            Juicios
                        </div>
                        <div class="card-body">
                                <h3 class="card-title">Alta Juicios</h3>
                                <form role="form" action="{{route('guardajuicio')}}" method="POST" class="text-center" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-xs-2">
                    Folio: <input type="text" name="num_juicio" id="num_juicio" value="{{$num_juicios}}" 
                            readonly class="form-control" style="text-align:center">
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <div class="form-group col-xs-3">
                    Selecciona Tipo de juicio:<select name="id_TipoJuicio" class="form-control" >
                        @foreach($tipo_juicios as $tipojui)
                            <option value= '{{$tipojui->id_TipoJuicio}}'> {{$tipojui->NomTipoJuicio}} 
                            </option>	
                        @endforeach
                    </select>  
                </div>
               
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-2">
                    <p><br>
                        <input type="text" id="datepicker" class="form-control" 
                        placeholder="Fecha Presentación." >
                    </p>
                </div>
                <div class="form-group col-xs-1">
                        <br><img src="https://img.icons8.com/color/48/000000/calendar.png" width="40" height="40">
                </div>
            </div>
            Actor o Quejoso Nombre(s) y Apellidos:
            <div class="row">
                <div class="form-group col-xs-2">
                    <input type="text" id="nomQuejoso" class="form-control" 
                        placeholder="Nombre.">
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-2">
                <input type="text" id="AppQuejoso" class="form-control" 
                    placeholder="Ap.Paterno.">
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-2">
                    <input type="text" id="ApmQuejoso" class="form-control" 
                        placeholder="Ap.Materno.">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    Selecciona Abogado:<select name="abogado" class="form-control" id="abogado">
                        <option value=''></option>        
                            @foreach($abogados as $nomAb)
                                <option value= '{{$nomAb->num_folio}}'> {{$nomAb->NomAbogado}} {{$nomAb->AppAbogado}} {{$nomAb->ApmAbogado}}
                                </option>	
                            @endforeach
                    </select>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-3">
                    Nombre: 
                    <br><input type = 'text' name = 'campo1' id="campo1" class="form-control" placeholder="Abogado (1)" readonly>
                    <div id= "AgregarAb">
               
                    </div>
                </div>
                <div class="form-group col-xs-2"><br>
                        <input type="button" class="btn btn-success btn-circle" id="boton1">
                        <input type="button" class="btn btn-danger btn-circle" id="boton2">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <div class="form-group green-border-focus">
                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" cols="30" placeholder="Descripción del Juicio...(255) carácteres" maxlength="255"></textarea>
                    </div>
                </div>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-8">
                    <input type = 'text' name = 'deman1' id="deman1" class="form-control" placeholder="Autoridad o Deman. (1)">
                    <div id= "AgregarDe">
               
                    </div>
                </div>
                <div class="form-group col-xs-2"><br>
                    <input type="button" class="btn btn-success btn-circle" id="boton3">
                    <input type="button" class="btn btn-danger btn-circle" id="boton4">
                </div>
            </div>
            <div class="row">
                    <div class="form-group col-xs-2">
                        Fecha de Audiencia:
                        <div class="radio">
                            <input type="radio" name="optradio" Value="1">No Aplica
                        </div>
                    </div>
                    <div class="form-group col-xs-2">
                        <br><div class="radio">
                                    <input type="radio" name="optradio" id="optradio2" value="2">Suspendida
                        </div>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-2">
                        <br><input type = 'text' name = 'datepicker2' id="datepicker2" class="form-control" placeholder="Celebrada" >
                    </div>
                    <div class="form-group col-xs-1">
                            <br><img src="https://img.icons8.com/color/48/000000/calendar.png" width="40" height="40" id="celebrada">
                    </div>
        </div>    
        <div class="row">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<div class="form-group col-xs-2">
                    <div class="radio">
                        <br><input type="radio" name="optradio2" value="5">Diferida
                    </div>
                </div>
                <div class="form-group col-xs-2">
                    <br><input type = 'text' name = 'datepicker3' id="datepicker3" class="form-control" placeholder="Fecha Inicial" >
                </div>
                <div class="form-group col-xs-1">
                        <br><img src="https://img.icons8.com/color/48/000000/calendar.png" width="40" height="40" id="fechaIni">
                </div>
                <div class="form-group col-xs-2">
                        <br><input type = 'text' name = 'datepicker3' id="datepicker4" class="form-control" placeholder="Fecha Final" >
                </div>
                <div class="form-group col-xs-1">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<br><img src="https://img.icons8.com/color/48/000000/calendar.png" width="40" height="40" id="fechafin">
                </div>
                <div class="form-group col-xs-2"><br>
                    <input type="button" class="btn btn-success btn-circle" id="boton5">
                </div>
        </div> 
        <div class="row" >
        
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="button" value="Guardar" class="btn btn-success col-2" id="boton6" data-toggle="modal" data-target="#exampleModal">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="reset" value="Cancelar" class="btn btn-warning col-2">
        </div> 
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alta Juicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="pintar">
                       
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>

                                </form>
    </div>
</div>
</div>  
</div> 
</div>
    @stop

    @section("footer")
    @include("templates.layouts.footer")
    @stop 