<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\LogsController;

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

Route::get('/', [MainController::class, 'index']);
Route::post('import', [ProduitController::class, 'importDoc'])->name('article.import');
Route::get('stock/export/', [ProduitController::class, 'exportDoc']);
Route::get('stock-reset', [ProduitController::class, 'reset']);
Route::get('consulter-produit', [ProduitController::class, 'viewProduit']);
Route::get('consulter-categorie', [ProduitController::class, 'viewCategorie']);
Route::get('get-produit/{id}', [ProduitController::class, 'getProduitId']);
Route::post('add-categorie', [ProduitController::class, 'addCategorie'])->name('register.categ');
Route::post('add-product', [ProduitController::class, 'addProduct'])->name('register.product');
Route::put('update-produit', [ProduitController::class, 'updateProduit'])->name('update.prod');
Route::delete('delete-produit/{id}', [ProduitController::class, 'deleteProduit']);
Route::get('consulter-stock', [StockController::class, 'index']);
Route::get('create-commande', [InvoiceController::class, 'index']);
Route::post('create-invoice', [InvoiceController::class, 'invoice'])->name('create.invoice');
Route::get('order-list', [InvoiceController::class, 'order'])->name('order.list');
Route::get('order-valid', [InvoiceController::class, 'valid'])->name('order.valid');
Route::put('confirm-order/{id}', [InvoiceController::class, 'updateOrder']);
Route::delete('delete-order/{id}', [InvoiceController::class, 'deleteOrder']);
Route::get('preview-invoice/{id}', [InvoiceController::class, 'getOrder']);
Route::get('view-budget', [BudgetController::class, 'index']);
Route::get('search-date', [BudgetController::class, 'byDate'])->name('search.date');
Route::get('search-month', [BudgetController::class, 'byMonth'])->name('search.month');
Route::get('search-year', [BudgetController::class, 'byYear'])->name('search.year');
Route::get('recent-activite', [LogsController::class, 'index']);