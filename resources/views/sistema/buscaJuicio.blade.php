<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/buscaJuicio.js')}}"></script>
    <script src='{{asset('js/jquery-3.1.1.min.js')}}'></script>
    <title>Busca Juicio</title>
    <script>
        $(document).ready(function(){
            $("#buscar").on('click',function(){
                var juicio = $("#juicio").val();
                var cliente = $("#cliente").val();
                cliente=cliente.split(" ",4) 
                var actor = $("#actor").val();
                actor=actor.split(" ",5)
                $("#pintar").load('{{url('mostrarJuicio')}}' + '?juicio=' + juicio + '&cliente=' + cliente + '&actor=' + actor);
            });
            
        });
    </script>
</head>
<body>
    <input type="text" name="juicio" id="juicio" placeholder="Busca Folio de Juicio">
    <input type="text" name="cliente" id="cliente" placeholder="Busca Cliente">
    <input type="text" name="actor" id="actor" placeholder="Busca Actor">
    <input type="button" id="buscar" value="Buscar">
    <div id="pintar">

    </div>
</body>
</html>