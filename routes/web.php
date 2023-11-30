<?php

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

Route::get('test', function() {
    return "welcome Nahla";
});

// Route::get('test1/{id}', function($id){  
//     return "The ID is:" .$id;
// });

// Route::get('test2/{id?}', function($id=0){  
//     return "The ID 2 is:" .$id;
// }) ->where(['id'=> '[0-9]+']);

// Route::get('test2/{id?}', function($id=0){  
//     return "The ID 2 is:" .$id;
// }) ->whereNumber('id');

// Route::get('/test3/{name?}', function ($name=null) {
//     return 'The name is: ' . $name;
//     })->whereAlpha('name');

//     Route::get('test4/{id}/{name}', function ($id,$name) {
//         return 'The age is: ' . $id . 'and the name is:' .  $name;
//         }) ->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);
        

//         Route::get('product/{category}', function ($cat) {
//             return "The category is: " . $cat;
//             })->whereIn('category',['laptop', 'mobile', 'pc']);

//it will return u to the home page
// Route::fallback(function() {
//     return redirect('/');
//     });

// Route::get('un', function () {
//     return view ('test');
//     });


Route::prefix('lar')->group(function () {
   
    
Route::get('/', function () {
    return view ('test');
    });
    

Route::get('/test3/{name?}', function ($name=null) {
    return 'The name is: ' . $name;
    })->whereAlpha('name');

    Route::get('test4/{id}/{name}', function ($id,$name) {
        return 'The age is: ' . $id . 'and the name is:' .  $name;
        }) ->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);
        

        Route::get('product/{category}', function ($cat) {
            return "The category is: " . $cat;
            })->whereIn('category',['laptop', 'mobile', 'pc']);

        });