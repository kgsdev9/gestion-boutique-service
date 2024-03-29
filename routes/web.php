<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\BoutiqueController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\GestionCommande;
use App\Http\Controllers\TestController;
use App\Http\Livewire\GestionUserComponent;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Rapport\RapportController;
use App\Http\Controllers\Commande\CommandeController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\Impression\ImpressionController;
use App\Http\Controllers\Impression\RapportTransactionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Livewire\DetailFacture;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth'])->group(function() {
Route::get('/users', GestionUserComponent::class);
//impresion
Route::get('/impression', [ImpressionController::class, 'impression'])->name('client.impression');
Route::get('/commande/impression/{id}', [ImpressionController::class, 'recu_impression'])->name('recu.commande');

Route::get('/detail/commande/{id}', [App\Http\Controllers\Commande\CommandeController::class, 'show'])->name('detail.commande');
Route::get('/gestion-commande', GestionCommande::class)->name('gestion.commande');
Route::get('/form/commande', [CommandeController::class, 'create'])->name('form.commande');
Route::post('/create/commande', [CommandeController::class, 'store'])->name('commande.poste');
Route::get('/edit/commande/{id}',  [CommandeController::class, 'edit'])->name('commande.edit');
Route::patch('/update/commande/{id}', [CommandeController::class, 'update'])->name('commande.update');
Route::get('/delete/commande/{id}', [CommandeController::class, 'destroy'])->name('delete.commande');
Route::get('/genererateur-rapport-annuels', [RapportController::class, 'index'])->name('sommaire.rapport');
Route::get('/rapport-commande', [ImpressionController::class, 'rapportCommande'])->name('rapport.commande');
//ROUTE POUR LA SOUMISSION DES RAPPORTS EN PDF VIA SMTP
Route::get('/send-rapport', [RapportController::class, 'generate'])->name('send.email');

});

Route::get('/print-test', [ImpressionController::class, 'fpdftest'])->name('print.html');


//mes nouvelles routes
Route::get('/annuaire-categories', CategoryController::class)->name('annuaire.categories');
Route::get('/annuaire-article',ArticleController::class)->name('annuaire.articles');
Route::get('/annuaire-commandes', OrderController::class)->name('annuaires.commande');
Route::get('/annuaire-boutique', BoutiqueController::class)->name('annuaire.boutique');
Route::get('/invoice-commande/{id}', [ImpressionController::class, 'invoiceCommande'])->name('invoice.commnde');
Route::get('/annuaires-services', ServiceController::class)->name('annuaire.service');
Route::get('/transactions', TransactionController::class)->name('annuaire.transaction.');
Route::get('/test', [ImpressionController::class, 'invoice'])->name('invoice');
Route::get('/transactions-with-mountly', [RapportTransactionController::class, 'invoiceAllTransactionMounthAllService'])->name('transaction.repport.mountly');
Route::get('/single-invoice-service/{id}', [RapportTransactionController::class, 'invoceTransaction'])->name('single.transaction.invoice');
Route::get('annuaire-bon-de-commande', BonCommandeController::class)->name('annuaire.bon.de.commande');

