<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta Juicio</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="{{asset('js/retraccion_juicio.js')}}"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('css/botones.css')}}" rel="stylesheet" >
	<script>
        $( function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</head>
<body>
        <div class="container col-12">
            <div class="row">
                <div class="form-group col-xs-2">
                    Folio: <input type="text" name="num_folio" id="num_folio" value="{{$num_juicios}}" 
                            readonly class="form-control" >
                </div>
                <div class="form-group col-xs-3">
                    Selecciona Tipo de juicio:<select name="id_TipoJuicio" class="form-control" >
                        @foreach($tipo_juicios as $tipojui)
                            <option value= '{{$tipojui->id_TipoJuicio}}'> {{$tipojui->NomTipoJuicio}} 
                            </option>	
                        @endforeach
                    </select>  
                </div>
               
                <div class="form-group col-xs-2">
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
                <div class="form-group col-xs-2">
                <input type="text" id="AppQuejoso" class="form-control" 
                    placeholder="Ap.Paterno.">
                </div>
                <div class="form-group col-xs-2">
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
                <div class="form-group col-xs-3">
                    Nombre: 
                    <br><input type = 'text' name = 'campo1' id="campo1" class="form-control" placeholder="Abogado (1)" readonly>
                    <div id= "AgregarAb">
               
                    </div>
                </div>
                <div class="form-group col-xs-2"><br>
                        <input type="button" class="btn btn-success btn-circle" id="boton1">
                        <input type="button" class="btn btn-danger btn-circle" id="boton2"><i class="icon-group-outline"></i>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <div class="form-group green-border-focus">
                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="5" cols="50" placeholder="Descripción del Juicio..."></textarea>
                    </div>
                </div>
                <div class="form-group col-xs-3">
                    <input type = 'text' name = 'deman1' id="deman1" class="form-control" placeholder="Autoridad o Demandado (1)">
                    <div id= "AgregarDe">
               
                    </div>
                </div>
                <div class="form-group col-xs-2"><br>
                    <input type="button" class="btn btn-success btn-circle" id="boton3">
                    <input type="button" class="btn btn-danger btn-circle" id="boton4"><i class="icon-group-outline"></i>
            </div>
            </div>
        </div>
         
        
        
</body>
</html>