<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\SingleAction;
use App\Http\Controllers\form;
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


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/', [admin::class,'home'
// ]);
// Route::get('/about', [admin::class,'about'
// ]);
// Route::get('/contact', [admin::class,'contact'
// ]);


// Route::controller(admin::class) -> group(function(){
//      Route::get('/{name}/{id}','home')->name('home');
//      Route::get('about','about')->name('about');
//     //  Route::get('contact','contact')->name('contact');
// });
// Route::get('contact', SingleAction::class)->name('contact');

Route::get('form' , [form::class , 'reg']);
Route::post('form' , [form::class , 'register_data']);
Route::get('/userdata' , [form::class , 'show_user']);
Route::get('/userdelete/{id}' , [form::class , 'dlt'])->name('user.dlt');
Route::get('/useredit/{id}' , [form::class , 'edit'])->name('user.edit');



// Route::get('/about/{name}/{age}',function($name,$age){
//       return view('about')->with(compact('name','age'));
// });




