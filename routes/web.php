<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\StoreController;

Route::get('/', function () {
    $helloworld = 'Hello World';
    return view('welcome', ['helloworld' => $helloworld]);
});

Route::get('/model', function(){
    //$products = \App\Product::all();

    $user = new \App\Models\User();
    $user->name = 'Usuário Teste';
    $user->email = 'email@teste.com';
    $user->password = bcrypt('12345678');

    //return $user->save();
    return \App\Models\User::all();


    //return $products;
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::prefix('/stores')->group(function(){
        Route::get('/', [StoreController::class, 'index']);
        Route::get('/create', [StoreController::class, 'create']);
        Route::post('/store', [StoreController::class, 'store']);
        Route::get('/{store}/edit', [StoreController::class, 'edit']);
        Route::post('/update/{store}', [StoreController::class, 'update']);
        Route::get('/destroy/{store}', [StoreController::class, 'destroy']);
    });
});
