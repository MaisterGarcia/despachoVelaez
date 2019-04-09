<table border="1">
        <tr>
            <td>Folio Juicio</td>
            <td>Nombre del Cliente</td>
            <td>Actor o Demandante</td>
        </tr>
@foreach ($resultado1 as $jui)
        <tr>
        <td>{{$jui->num_folio}}</td>
        <td>{{$jui->NomDemandante}}</td>
        <td>{{$jui->Dema1}}</td>
        </tr>
@endforeach
</table>