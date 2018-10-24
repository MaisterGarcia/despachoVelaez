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
    return view('welcome');
});
Route::get('/altaTipoAbogado','controlador_abogados@altaTipAb')->name('altaTipoAbogado');;
Route::POST('/guardaTipoAbogado','controlador_abogados@guardaTipoAbogado')->name('guardaTipoAbogado');
Route::get('/reporteTipoAbogados','controlador_abogados@reporteTipAb');
Route::get('/modificamTA/{idTipoAbogado}','controlador_abogados@modificamTA')->name('modificamTA');
Route::POST('/guardaedicionmTA','controlador_abogados@guardaedicionmTA')->name('guardaedicionmTA');

Route::get('/altaTipoArchivo','controlador_TipoArchivos@altaTipArch')->name('altaTipoArchivo');
Route::POST('/guardaTipoArchivo','controlador_TipoArchivos@guardaTipoArchivo')->name('guardaTipoArchivo');
Route::get('/reporteTipoArchivos','controlador_TipoArchivos@reporteTipArc');
Route::get('/modificamTArc/{id_TipoArchivo}','controlador_TipoArchivos@modificamTArc')->name('modificamTArc');
Route::POST('/guardaedicionmTArc','controlador_TipoArchivos@guardaedicionmTArc')->name('guardaedicionmTArc');

Route::get('/altaTarea','controlador_Tareas@altaTarea')->name('altaTarea');
Route::POST('/guardaTarea','controlador_Tareas@guardaTarea')->name('guardaTarea');
Route::get('/reporteTarea','controlador_Tareas@reporteTarea');
Route::get('/modificamTarea/{id_Tarea}','controlador_Tareas@modificamTarea')->name('modificamTArc');
Route::POST('/guardaedicionmTarea','controlador_Tareas@guardaedicionmTarea')->name('guardaedicionmTarea');

Route::get('/altaTipoJuicio','controlador_TipoJuicio@altaTipJui')->name('altaTipoJuicio');
Route::POST('/guardaTipoJuicio','controlador_TipoJuicio@guardaTipoJuicio')->name('guardaTipoJuicio');
Route::get('/reporteTipoJuicios','controlador_TipoJuicio@reporteTipJuic');

Route::get('/altaTipoJuzgado','controlador_TipoJuzgados@altaTipJuz')->name('altaTipoJuzgado');
Route::POST('/guardaTipoJuzgado','controlador_TipoJuzgados@guardaTipoJuzgado')->name('guardaTipoJuzgado');
Route::get('/reporteTipoJuzgados','controlador_TipoJuzgados@reporteTipJuz');