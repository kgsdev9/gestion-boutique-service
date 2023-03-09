<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController ;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Livewire\GestionUserComponent;
use App\Http\Controllers\Impression\ImpressionController; 
use App\Http\Livewire\ListeProductComponent; 
use App\Http\Livewire\ClientGestionComponent; 
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


//routes pour la gestion des clients

Route::get('/form/client', [ClientController::class, 'create'])->name('client.form');
Route::post('/create/client', [ClientController::class, 'store'])->name('client.add');
Route::get('/edit/client/{id}', [ClientController::class, 'edit'])->name('edit.client');
Route::patch('/update/client/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/delete/client/{id}', [ClientController::class, 'destroy'])->name('client.delete');
Route::get('/detail/client/{id}', [ClientController::class, 'show'])->name('client.show');
Route::get('/gestion-client', ClientGestionComponent::class)->name('gestion.client');

//routes pour les gestions de categorie 
Route::get('/categorie/gestion', [CategoryController::class, 'index'])->name('categorie.gestion');
Route::get('/categorie/form', [CategoryController::class, 'create'])->name('category.form');
Route::post('/create/categorie', [CategoryController::class, 'store'])->name('categorie.add');
Route::get('/edit/categorie/{id}', [CategoryController::class, 'edit'])->name('categorie.edit');
Route::patch('/update/categorie/{id}', [CategoryController::class,'update'])->name('categorie.update');
Route::get('/categorie/delete/{id}', [CategoryController::class, 'destroy'])->name('categorie.destroy');



//routes pour les gestions de product  
Route::get('/product/form', [ProductController::class, 'create'])->name('product.form');
Route::post('/product/categorie', [ProductController::class, 'store'])->name('product.add');
Route::get('/edit/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/update/product/{id}', [ProductController::class,'update'])->name('product.update');
Route::get('/destroy/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/detail/product/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/product/gestion', ListeProductComponent::class)->name('product.gestion');



Route::get('/users', GestionUserComponent::class);

//impresion 
Route::get('/impression', [ImpressionController::class, 'impression'])->name('client.impression');