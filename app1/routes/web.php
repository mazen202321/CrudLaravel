<?php

use App\Http\Controllers\ClientsController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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
    return view('welcome');
});
Route::prefix('/clients')->name('clients.')->controller(ClientsController::class)->group(function(){
    Route::get('','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::delete('/delete','delete')->name('delete');
    Route::get('/edite/{id}','edite')->name('edite');
    Route::put('/update','update')->name('update');
});




