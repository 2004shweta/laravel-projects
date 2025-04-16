<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormStudentController;
use App\Http\Controllers\MailController;


Route::get('/send-welcome', [MailController::class, 'sendWelcome']);


Route::get('/send-mail', [MailController::class, 'sendMail']);


Route::get('/formstudent', [FormStudentController::class, 'create']);
Route::post('/formstudent', [FormStudentController::class, 'store'])->name('formstudent.store');



//Fetching data From Database
Route::get('/students', [StudentController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home'); // This returns the 'home.blade.php' view
});


// Route::get('/hello', function () {
//     return 'Hello, World!';
// });

Route::get('/hello', function () {
    return view('hello');
});
// Route::get('lpu')-> group(function(){
//     Route::get('/home/in/com/path',function(){
//         return view('profile');
//     })->name('profile');

//     Route::get('/{name?}', function ($name = "User") {
//         return view('user', ['name' => ucfirst($name)]);
//     });
// });

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
Route::get('/details', function(){
    $details=[
        "name"=>"shweta",
        "age"=>21,
        "email"=>"shweta@gmail.com"
    ];
    // return ("The details of shweta are are <br> Name:".$details['name']."<br> Age:".$details['age']."<br> Email:".$details['email']);
    return response()->json($details);
});
// Route::get('/home',function(){
//     return view ('home');
// });
Route::get('/aboutus',function(){
    return view ('aboutus');
});
// Route::redirect('/home','/aboutus');

Route::get('lpu/home/in/com/path',function(){
    return view('profile');
})->name('profile');

// Route::get('/setcookie', function(){
//     return response('Cookie has been set')->cookie('username','abc',1000);
// });
// Route::get('/restricted', function () {
//     return "You are allowed!";
// })->middleware('checkAge');


//FORMVALIDATION
Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'handleForm']);


//DATABASE SQL QUERY
// Route::get('/insert', function () {
//     DB::insert("INSERT INTO users (name, email, age) VALUES (?, ?, ?)", ['John Doe', 'john@example.com', 25]);
//     return "Data Inserted Successfully!";
// });
