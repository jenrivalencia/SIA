<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Cfe\WsController;
use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\Test\DistribuidorController;


/*RUTA PRINCIPAL AL DASHBOARD */
Route::get('', [HomeController::class,'index'])->name('dashboard');

/*RUTAS PARA CREAR USUARIOS, ROLES Y PERMISOS*/
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('permissions', PermissionController::class)->names('permissions');
Route::resource('users', UserController::class)->names('users');

/*RUTAS PARA CONSULTAR RPU EN WEB-SERVICE */
Route::get('datos',[WsController::class,'index'])->name('datos.index');
Route::post('datos',[WsController::class,'BuscaCliente'])->name('datos.busca');

/*RUTA PARA LAS ACTIVIDADES */
Route::resource('actividades',ActividadController::class)->names('actividades');


Route::get('/distribuidores',[DistribuidorController::class,'index'])->name('distribuidor.index');
Route::get('/distribuidores/create',[DistribuidorController::class,'create'])->name('distribuidor.create');
Route::post('/distribuidores/store',[DistribuidorController::class,'store'])->name('distribuidor.store');

Route::get('/distribuidores/edit/{distribuidor}',[DistribuidorController::class,'edit'])->name('distribuidor.edit');
Route::post('/distribuidores/update/{distribuidor}',[DistribuidorController::class,'update'])->name('distribuidor.update');
Route::get('/distribuidores/show/{distribuidor}',[DistribuidorController::class,'show'])->name('distribuidor.show');


/*
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [HomeController::class,'index'])->name('dashboard');

    //CRUD ROLES
    Route::get('/roles', [RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/store', [RoleController::class,'store'])->name('roles.store');
    Route::get('/roles/show/{role}', [RoleController::class,'show'])->name('roles.show');
    Route::get('/roles/edit/{role}', [RoleController::class,'edit'])->name('roles.edit');
    Route::post('/roles/update/{role}', [RoleController::class,'update'])->name('roles.update');
    Route::post('/roles/destroy/{role}', [RoleController::class,'destroy'])->name('roles.destroy');

    //CRUD PERMISSIONS
    Route::get('/permissions', [PermissionController::class,'index'])->name('permissions.index');
    Route::get('/permissions/create',[PermissionController::class,'create'])->name('permissions.create');
    Route::post('/permissions/store',[PermissionController::class,'store'])->name('permissions.store');
    Route::get('/permissions/show/{permission}',[PermissionController::class,'show'])->name('permissions.show');
    Route::get('/permissions/edit/{permission}',[PermissionController::class,'edit'])->name('permissions.edit');
    Route::post('/permissions/update/{permission}',[PermissionController::class,'update'])->name('permissions.update');
    Route::post('/permissions/destroy/{permission}',[PermissionController::class,'destroy'])->name('permissions.destroy');
});
*/
