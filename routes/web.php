<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\admincontroller2;
use App\Http\Controllers\authcontrolad;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\rooscontroller;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('nav_foot.accueil');
// });
Route::get('/',[rooscontroller::class , 'accueil'])->name('accueil');
Route::get('/reservation', [rooscontroller::class, 'reservation'])->name('reservation');
Route::get('/reservation/{id}', [rooscontroller::class, 'reservation'])->name('reservation');
Route::post('/reservation/submit', [rooscontroller::class, 'reservationpost'])->name('reservationpost');

// Route::match(['get', 'post'], '/reservation/{id}', [rooscontroller::class, 'reservation'])->name('reservation');
// Route::get('/erreur', [rooscontroller::class, 'erreur'])->name('erreur');







// Route::get('/inscription' , function(){

// });
Route::get('/inscription',[rooscontroller::class , 'register'])->name('register');
Route::post('/inscription',[authcontroller::class , 'doregister']);


Route::get('/connexion',[rooscontroller::class , 'login'])->name('auth.login');
Route::delete('/logout',[authcontroller::class , 'logout'])->name('auth.logout');
Route::post('/connexion',[authcontroller::class , 'dologin']);


Route::get('/lemenu',[rooscontroller::class , 'menu'])->name('lemenu');
Route::get('/apropos',[rooscontroller::class , 'apropos'])->name('apropos');


//histoire d'admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[admincontroller::class , 'accueiladmin'])->name('accueil')->middleware('admin');
    Route::get('/connexion',[admincontroller::class , 'connexionadmin'])->name('connexionad');
    Route::post('/connexion',[authcontrolad::class , 'dologinad']);
    Route::delete('/logout',[authcontrolad::class , 'logoutad'])->name('logout')->middleware('admin');
    Route::get('/modifiermdp', [authcontrolad::class, 'editmdp'])->name('editmdp')->middleware('admin');
    // Route::post('/modifiermdp', [authcontrolad::class, 'updatemdp'])->name('updatemdp');
    Route::match(['put', 'patch'] ,'/modifiermdp', [authcontrolad::class, 'updatemdp'])->name('updatemdp')->middleware('admin');


    // Route::post('/connexion',[authcontrolad::class , 'doregisterad']);


    // route plat
    Route::get('/plats',[admincontroller::class , 'index'])->name('ajoutplat')->middleware('admin');
    Route::post('/plats',[admincontroller::class , 'store'])->middleware('admin');
    Route::delete('/plats/{plat}',[admincontroller::class , 'destroy'])->name('suppplat')->middleware('admin');
    Route::get('/plats/{plat}',[admincontroller::class , 'edit'])->name('ediplat')->middleware('admin');
    Route::match(['put', 'patch'], '/plats/{plat}', [admincontroller::class , 'update'])->name('upplat')->middleware('admin');
    // route boissons
    Route::get('/boissons',[admincontroller::class , 'indexboisson'])->name('ajoutboisson')->middleware('admin');
    Route::post('/boissons',[admincontroller::class , 'storeboisson'])->middleware('admin');
    Route::delete('/boissons/{boisson}',[admincontroller::class , 'destroyboisson'])->name('suppboisson')->middleware('admin');
    Route::get('/boissons/{boisson}',[admincontroller::class , 'editb'])->name('ediboisson')->middleware('admin');
    Route::match(['put', 'patch'], '/boissons/{boisson}', [admincontroller::class , 'updateboisson'])->name('upboisson')->middleware('admin');


    // route table
    Route::get('/tables',[admincontroller2::class , 'index'])->name('ajoutable')->middleware('admin');
    Route::post('/tables',[admincontroller2::class , 'storet'])->middleware('admin');
    Route::delete('/tables/{table}',[admincontroller2::class , 'destroy'])->name('supptable')->middleware('admin');
    Route::get('/tables/{table}',[admincontroller2::class , 'edit'])->name('editable')->middleware('admin');
    Route::match(['put', 'patch'], '/tables/{table}', [admincontroller2::class , 'update'])->name('uptable')->middleware('admin');


});

