<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\MovimentacaoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('containers', ContainerController::class);
Route::post('containers/filtrar/container', [ContainerController::class, 'filtrar'])->name('filtrar');

Route::resource('movimentacoes', MovimentacaoController::class);
Route::post('movimentacoes/filtrar/container', [MovimentacaoController::class, 'filtrar_container'])->name('filtrar_container');
Route::post('movimentacoes/filtrar/movimentacao', [MovimentacaoController::class, 'filtrar_movimentacao'])->name('filtrar_movimentacao');

Route::get('relatorio', [MovimentacaoController::class, 'relatorio'])->name('relatorio');
