<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello, World!';
// });

Route::get('/hello', function () {
    return view('hello');
});

// Route::get('/lpu/{name?}', function($name="User"){
// return (ucfirst($name)." is studying in LPU");
// });

Route::get('/lpu/{name?}', function ($name = "User") {
    return view('user', ['name' => ucfirst($name)]);
});


Route::get('/profile/{name}/{age}', function($name, $age){
    return view('profile', ['name' => ucfirst($name), 'age' => $age]);
});
// Route::get('/add/{num1}/{num2}', function($num1, $num2){
//     return "The sum of num1 and num2 is".($num1+$num2);
// });

Route::get('/add/{num1}/{num2}', function($num1, $num2){
    return view ('add',['num1'=>$num2, 'num2'=>$num2]);
});
