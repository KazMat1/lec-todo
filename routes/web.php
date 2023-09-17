<?php

use App\Http\Controllers\FolderController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'folders/',
    'as' => 'folders.',
], function () {
    Route::group([
        'prefix' => '/{id}/tasks',
        'as' => 'tasks.'
    ], function () {
        // /folders/{id}/tasks/{xxx}, name('folders.tasks.{xxx}')
        Route::get('', [TaskController::class, 'index'])
            ->name('index');
        Route::get('create', [TaskController::class, 'create'])
            ->name('create');
        Route::post('store', [TaskController::class, 'store'])
            ->name('store');
    });

    // /folders/, name('folders.{xxx}')
    Route::get('create', [FolderController::class, 'create'])
        ->name('create');
    Route::post('store', [FolderController::class, 'store'])
        ->name('store');
});
