<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {

    return view('sistema.index');
});
Route::get('/conocenos','Cabogados@conocenos')->name('conocenos');
Route::get('/servicios','Cabogados@servicios')->name('servicios');

Route::get('/altaTipoAbogado','controlador_abogados@altaTipAb')->name('altaTipoAbogado');
Route::POST('/guardaTipoAbogado','controlador_abogados@guardaTipoAbogado')->name('guardaTipoAbogado');
Route::get('/reporteTipoAbogados','controlador_abogados@reporteTipAb')->name('reporteTipoAbogados');
Route::get('/eliminatipoabogado/{idTipoAbogado}','controlador_abogados@eliminatipoabogado')->name('eliminatipoabogado');
route::get('/restarurartipoabogado/{idTipoAbogado}','controlador_abogados@restarurarTipoA')->name('restarurarTipAb');
Route::get('/modificamTA/{idTipoAbogado}','controlador_abogados@modificamTA')->name('modificamTA');
Route::POST('/guardaedicionmTA','controlador_abogados@guardaedicionmTA')->name('guardaedicionmTA');

Route::get('/altaTipoArchivo','controlador_TipoArchivos@altaTipArch')->name('altaTipoArchivo');
Route::POST('/guardaTipoArchivo','controlador_TipoArchivos@guardaTipoArchivo')->name('guardaTipoArchivo');
Route::get('/reporteTipoArchivos','controlador_TipoArchivos@reporteTipArc')->name('reporteTipoArchivos');
Route::get('/eliminatipoarchivo/{id_TipoArchivo}','controlador_abogados@eliminatipoarchivo')->name('eliminatipoarchivo');
Route::get('/modificamTArc/{id_TipoArchivo}','controlador_TipoArchivos@modificamTArc')->name('modificamTArc');
Route::POST('/guardaedicionmTArc','controlador_TipoArchivos@guardaedicionmTArc')->name('guardaedicionmTArc');

Route::get('/altaTarea','controlador_Tareas@altaTarea')->name('altaTarea');
Route::POST('/guardaTarea','controlador_Tareas@guardaTarea')->name('guardaTarea');
Route::get('/reporteTarea','controlador_Tareas@reporteTarea')->name('reporteTarea');
Route::get('/modificamTarea/{id_Tarea}','controlador_Tareas@modificamTarea')->name('modificamTArc');
Route::POST('/guardaedicionmTarea','controlador_Tareas@guardaedicionmTarea')->name('guardaedicionmTarea');
Route::get('/eliminatarea/{id_Tarea}','controlador_Tareas@eliminatarea')->name('eliminatarea');
route::get('/restarurartarea/{id_Tarea}','controlador_Tareas@restarurartarea')->name('restarurartarea');

Route::get('/altaTipoJuicio','controlador_TipoJuicio@altaTipJui')->name('altaTipoJuicio');
Route::POST('/guardaTipoJuicio','controlador_TipoJuicio@guardaTipoJuicio')->name('guardaTipoJuicio');
Route::get('/reporteTipoJuicios','controlador_TipoJuicio@reporteTipJuic')->name('reporteTipoJuicios');
Route::get('/eliminaTipJui/{id_TipoJuicio}','controlador_TipoJuicio@eliminaTipJui')->name('eliminaTipJui');
route::get('/restarurarTipJui/{id_TipoJuicio}','controlador_TipoJuicio@restaurarTipJui')->name('restarurarTipJui');
Route::get('/modificaTipJui/{id_TipoJuicio}','controlador_TipoJuicio@modificaTipJui')->name('modificaTipJui');
Route::POST('/guardaedicionTipJui','controlador_TipoJuicio@guardaedicionTipJui')->name('guardaedicionTipJui');

Route::get('/altaTipoJuzgado','controlador_TipoJuzgados@altaTipJuz')->name('altaTipoJuzgado');
Route::POST('/guardaTipoJuzgado','controlador_TipoJuzgados@guardaTipoJuzgado')->name('guardaTipoJuzgado');
Route::get('/reporteTipoJuzgados','controlador_TipoJuzgados@reporteTipJuz')->name('reporteTipoJuzgados');
route::get('/eliminatipojuzgado/{id_TipoJuzgado}','controlador_TipoJuzgados@eliminatipojuzgado')->name('eliminatipojuzgado');
route::get('/modificatipojuzgado/{id_TipoJuzgado}','controlador_TipoJuzgados@modificatipojuzgado')->name('modificatipojuzgado');
route::POST('/guardaediciontipojuzgado','controlador_TipoJuzgados@guardaediciontipojuzgado')->name('guardaediciontipojuzgado');
route::get('/restarurartipojuzgado/{id_TipoJuzgado}','controlador_TipoJuzgados@restarurartipojuzgado')->name('restarurartipojuzgado');

route::get('/altaabogado','Cabogados@altaabogado')->name('altaabogado');
route::POST('/guardaabogado','Cabogados@guardaabogado')->name('guardaabogado');
route::get('/reporteabogado','Cabogados@reporteabogado')->name('reporteabogado');
route::get('/eliminaabogado/{num_folio}','Cabogados@eliminaabogado')->name('eliminaabogado');
route::get('/modificaabogado/{num_folio}','Cabogados@modificaabogado')->name('modificaabogado');
route::POST('/guardaedicionabogado','Cabogados@guardaedicionabogado')->name('guardaedicionabogado');
route::get('/restarurarabogado/{num_folio}','Cabogados@restarurarabogado')->name('restarurarabogado');

route::get('/altaclientes','Cabogados@altaclientes')->name('altaclientes');
route::POST('/guardaclientes','Cabogados@guardaclientes')->name('guardaclientes');
route::get('/reporteclientes','Cabogados@reporteclientes')->name('reporteclientes');
route::get('/eliminacliente/{id_cte}','Cabogados@eliminacliente')->name('eliminacliente');
route::get('/modificacliente/{id_cte}','Cabogados@modificacliente')->name('modificacliente');
route::POST('/guardaedicioncliente','Cabogados@guardaedicioncliente')->name('guardaedicioncliente');
route::get('/restarurarcliente/{id_cte}','Cabogados@restarurarcliente')->name('restarurarcliente');

route::get('/altajuicio','Cabogados@altajuicio')->name('altajuicio');
route::POST('/guardajuicio','Cabogados@guardajuicio')->name('guardajuicio');
route::get('/reportejuicio','Cabogados@reportejuicio')->name('reportejuicio');
route::get('/eliminajuicio/{num_juicio}','Cabogados@eliminajuicio')->name('eliminajuicio');
route::get('/modificajuicio/{num_juicio}','Cabogados@modificajuicio')->name('modificajuicio');
route::POST('/guardaedicionjuicio','Cabogados@guardaedicionjuicio')->name('guardaedicionjuicio');
route::get('/restarurarjuicio/{num_juicio}','Cabogados@restarurarjuicio')->name('restarurarjuicio');

route::get('/altajuzgados','Cabogados@altajuzgados')->name('altajuzgados');
route::POST('/guardajuzgados','Cabogados@guardajuzgados')->name('guardajuzgados');
route::get('/reportejuzgados','Cabogados@reportejuzgados')->name('reportejuzgados');
route::get('/eliminajuzgado/{FolioJuzgado}','Cabogados@eliminajuzgado')->name('eliminajuzgado');
route::get('/modificajuzgado/{FolioJuzgado}','Cabogados@modificajuzgado')->name('modificajuzgado');
route::POST('/guardaedicionjuzgado','Cabogados@guardaedicionjuzgado')->name('guardaedicionjuzgado');
route::get('/restarurarjuzgado/{FolioJuzgado}','Cabogados@restarurarjuzgado')->name('restarurarjuzgado');


route::get('/altasubmaterias','submateriasController@altaSubmateria')->name('altasubmaterias');
route::POST('/guardaSubmateria','submateriasController@guardaSub')->name('guardaSubmateria');
route::get('/reporteSubmateria','submateriasController@reporteSub')->name('reporteSubmateria');

Route::get('/login','accesoc@login')->name('login');
Route::POST('/valida','accesoc@valida')->name('valida');
Route::get('/principal','accesoc@principal')->name('principal');
Route::get('/dashboard','Cabogados@contar_abogados')->name('contar_abogados');
Route::get('/cerrarsesion','accesoc@cerrarsesion')->name('cerrarsesion');

Route::get('/archivos/{doc}' , 'Cabogados@downloadFile');
route::get('/archivosXCliente','Cabogados@archivosXCliente')->name('archivosXCliente');
route::get('/juicioModal','Cabogados@juicioModal')->name('juicioModal');
route::get('/archivoCliente','Cabogados@archivoCliente')->name('archivoCliente');

Route::POST('/impresion','Cabogados@impresion')->name('impresion');
Route::get('/retraccion','Cabogados@retraccion')->name('retraccion');

// Rutas para mejora del Sistema
Route::get('/juicio_N','Cabogados@juicio_N')->name('juicio_N');