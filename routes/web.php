<?php

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
    return view('welcome');
});

Route::get('/miPrimeraRuta', function () {
    return "Creé mi primera ruta en Laravel";
});

Route::get('/esPar/{numero}', function ($numero) {
    if($numero%2==0){return "$numero es par";}
    else{return "$numero es impar";}
});

Route::get('/sumar/{numero1}/{numero2}/{numero3?}', function ($numero1,$numero2,$numero3="") {
if ($numero3==""){$resultado = $numero1+$numero2;
  return "$numero1 + $numero2= $resultado";

}else {$resultado = $numero1+$numero2+$numero3;
return "$numero1 + $numero2 +$numero3= $resultado";
}
  // code...
});

Route::get('/peliculas', function () {

  $peliculas = [["titulo"=>"Titanic","rating"=>5],["titulo"=>"Mi pobre angelito", "rating"=>4], ["titulo"=>"Terminator","rating"=>2], ["titulo"=>"El resplandor","rating"=>3], ["titulo"=>"El Rey Leon","rating"=>5]];

    return view('peliculas',compact('peliculas'));
});
