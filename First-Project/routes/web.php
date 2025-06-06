<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('user.home');

// Route::get('/post',function(){
//     return view('post');
// });

// Route::view('/post','post');

// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// })->name('user.view');


// ARTISAN commands --Route
// php artisan 
// php artisan route -h
// php artisan route:list
// php artisan route:list --except-vendor
// php artisan route:list --path=post



                                        /** Laravel Route Parametrs **/


// Route::get('/post/{id?}',function(string $id = null){
//     if($id){
//          return "<h1>Post ID : " .$id . "</h1>";
//     }else{
//         return "<h1>No ID Found</h1>";
//     }
   
//     // return view('post');
// });

// Route::get('/post/{id?}/comment/{comment_id?}',function(string $id=null ,string $comment_id=null){
//     return "<h1>ID:".$id. "<h1><h2>Comment: ". $comment_id. "</h2>";
// });


/**  Laravel Route Constants**/

// Route::get('/post/{id?}',function(string $id=null ){
//     if($id){
//         return "User".$id;
//     }else{
//         return "No Id Found";
//     }
    
// })->whereNumber('id');

// Route::get('/post/{id?}',function(string $id=null ){
//     if($id){
//         return "User".$id;
//     }else{
//         return "No Id Found";
//     }
    
// })->whereIn('id',['movie','song','painting']);


// Route::get('/post/{id?}',function(string $id=null ){
//     if($id){
//         return "User".$id;
//     }else{
//         return "No Id Found";
//     }
    
// })->where('id','[a-zA-Z]+');


// Route::get('/post/{id?}/comment/{comment_id?}',function(string $id=null, string $comment_id =null ){
//     if($id){
//         return "<h1>User ". $id ."</h1><h2> Comment ".$comment_id. "</h2>";
//     }else{
//         return "No Id Found";
//     }
    
// })->whereNumber('id')->whereAlpha('comment_id');


/** Named Route and Route Groups **/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/post',function(){
//     return view('post');
// })->name('mypost');

// Route::redirect('/about', '/test', 301);

/** ROUTE GROUPS**/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('page')->group(function(){
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/post',function(){
        return view('post');
    })->name('mypost');

    Route::get('/post/firstpost',function(){
        return view('firstpost');
    })->name('user.view');

});

Route::fallback(function(){
    return "<h1>Page Not Found.</h1>";
});
