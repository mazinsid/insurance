<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MaintenanceCenterController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SoldProductController;
use App\Http\Controllers\StoreController;
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

// agents
Route::get('/agents' , [AgentController::class ,'index'])->name('agent.index');
Route::post('/agent' , [AgentController::class , 'store'])->name('agent.ceate');
Route::put('/agent/{agent}' , [AgentController::class , 'update'])->name('agent.update');
Route::delete('/agent/{agent}' , [AgentController::class , 'delete'])->name('agent.delete');

// branches
Route::get('/branches' , [BranchController::class ,'index'])->name('branche.index');
Route::post('/branche' , [BranchController::class , 'store'])->name('branche.ceate');
Route::put('/branche/{branche}' , [BranchController::class , 'update'])->name('branche.update');
Route::delete('/branche/{branche}' , [BranchController::class , 'delete'])->name('branche.delete');

// customers
Route::get('/customers' , [CustomerController::class ,'index'])->name('customer.index');
Route::post('/customer' , [CustomerController::class , 'store'])->name('customer.ceate');
Route::put('/customer/{customer}' , [CustomerController::class , 'update'])->name('customer.update');
Route::delete('/customer/{customer}' , [CustomerController::class , 'delete'])->name('customer.delete');

// insurances
Route::get('/insurances' , [InsuranceController::class ,'index'])->name('insurance.index');
Route::post('/insurance' , [InsuranceController::class , 'store'])->name('insurance.ceate');
Route::put('/insurance/{insurance}' , [InsuranceController::class , 'update'])->name('insurance.update');
Route::delete('/insurance/{insurance}' , [InsuranceController::class , 'delete'])->name('insurance.delete');

// maintenance centers
Route::get('/maintenanceCenters' , [MaintenanceCenterController::class ,'index'])->name('maintenanceCenters.index');
Route::post('/maintenanceCenter' , [MaintenanceCenterController::class , 'store'])->name('maintenanceCenters.ceate');
Route::put('/maintenanceCenter/{maintenanceCenters}' , [MaintenanceCenterController::class , 'update'])->name('maintenanceCenters.update');
Route::delete('/maintenanceCenter/{maintenanceCenters}' , [MaintenanceCenterController::class , 'delete'])->name('maintenanceCenters.delete');

// maintenances
Route::get('/maintenances' , [MaintenanceController::class ,'index'])->name('maintenance.index');
Route::post('/maintenance' , [MaintenanceController::class , 'store'])->name('maintenance.ceate');
Route::put('/maintenance/{maintenance}' , [MaintenanceController::class , 'update'])->name('maintenance.update');
Route::delete('/maintenance/{maintenance}' , [MaintenanceController::class , 'delete'])->name('maintenance.delete');

// products
Route::get('/products' , [ProductController::class ,'index'])->name('products.index');
Route::post('/product' , [ProductController::class , 'store'])->name('products.ceate');
Route::put('/products/{products}' , [ProductController::class , 'update'])->name('products.update');
Route::delete('/products/{products}' , [ProductController::class , 'delete'])->name('product.delete');

// sold product
Route::get('/soldProducts' , [SoldProductController::class ,'index'])->name('soldProduct.index');
Route::post('/soldProduct' , [SoldProductController::class , 'store'])->name('soldProduct.ceate');
Route::put('/soldProduct/{soldProduct}' , [SoldProductController::class , 'update'])->name('soldProduct.update');
Route::delete('/soldProduct/{soldProduct}' , [SoldProductController::class , 'delete'])->name('soldProduct.delete');


// stores
Route::get('/stores' , [StoreController::class ,'index'])->name('store.index');
Route::post('/store' , [StoreController::class , 'store'])->name('store.ceate');
Route::put('/store/{store}' , [StoreController::class , 'update'])->name('store.update');
Route::delete('/store/{store}' , [StoreController::class , 'delete'])->name('store.delete');
