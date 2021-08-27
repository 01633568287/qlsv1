<?php

use Illuminate\Support\Facades\Route;

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
//http:/localhost:8000/vn/lang -> Tiếng việt
//http:/localhost:8000/en/lang -> Tiếng anh
//http:/localhost:8000/es/lang -> Tiếng Tây Ban Nha


Route::get("/{lang}/lang",function($lang){
    session(['lang'=>$lang]);
    $s_lang=session('lang','cn');
    echo "AAAAA".$s_lang;
});
Route::get("/test",function(){
    $tmp=session('lang','cn');
    echo $tmp;
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('class',\App\Http\Controllers\ClassController::class);
Route::resource('student',\App\Http\Controllers\StudentController::class);
Route::get('/welcome/{lang}',function($lang){
    App::setLocale($lang);
    session(['lang'=>$lang]);
    return redirect()->route("class.index");
});