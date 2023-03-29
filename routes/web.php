<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $users = ['Alan', 'Matias', 'Thomas', 'Maxi', 'Emi'];
    return view('vista1')-> with('users', $users);
});
Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
// Route::get('/', 'App\Http\Controllers\InicioController@index');
    //view --> es una function global, no hace falta poner todo el nombre
    // return view('view1', ['nombre' => 'Alan']);

    // Route::resource('/', 'App\Http\Controllers\PersonaController');
// if(View::exists('view2')){
//     Route::get('/', function () {
//         //view --> es una function global, no hace falta poner todo el nombre
//         return view('view2');
//     });
// }else{
//     Route::get('/', function () {
//         //view --> es una function global, no hace falta poner todo el nombre
//         return '<h2>La vista no se encuentra disponible!</h2>';
//     });
// }
// Route::get('/arreglo' , function () {
//     $arreglo = [
//         'Id'=> '1',
//         'Descripcion' => 'Hello people , I love so much, respect!',
//     ];
//     return $arreglo;
// });

// Route::get('/usuario/{usuario}', function ($usuario) {
//   return '<h1>Este es el usuario: ' .$usuario. '</h1>';
// })->where('usuario', '[A-Za-z]+');

// Route::get('/ruta1', function () {
//     return '<h1>Esta es la ruta nro 1</h1>';
// })-> name('rutaNro1');


// Route::get('/ruta2', function () {
//     return redirect()-> route('rutaNro1');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

