<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SingleFunctionality;

function getData(){
    return array(
        1 => ['name' => 'Ali', 'age' => 21], 
        2 => ['name' => 'Saeed', 'age' => 29]
    );
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/test', function () {
    return view('test');
})->name('test');

// Route::get('pass-data', function(){
//     $name = "Ali";
//     return view('pass-data', ['user' => $name]);
// })->name('pass-data');

Route::get('/pass-data', function () {
    
    $data = getData();
    return view('pass-data', ['data' => $data]);

    // return view('pass-data')->with('name', 'Saeed')->with('age', 26);
    // return view('pass-data')->withName('Kela')->withAge(26);
})->name('pass-data');

Route::get('/pass-data/{id}', function($id){
    $data = getData();
    abort_if(!isset($data[$id]), 404);
    $user = $data[$id];
    return view('user', ['user' => $user]);
})->name('view-details');

// Route::get('/controller', [FirstController::class, 'sayGreetings']);
// Route::get('/controller/user/{id}', [FirstController::class, 'showUser']);

Route::controller(FirstController::class)->group(function(){
    Route::get('/controller', 'sayGreetings');
    Route::get('/controller/user/{id}', 'showUser');

});

Route::get('/single-functionality', SingleFunctionality::class);