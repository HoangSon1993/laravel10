<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ProductController;

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
//--------------------------------user--------------------------
Route::get('/', function () {
    return view('user.home'); //dau . la thu muc cha
});

Route::get('/product',function(){
    return view('user.product');
});

Route::get('/login',function(){
    return "Login";
});

Route::get('/about',function () {
    return "About";
}
);

Route::get('product2',[ProductController::class,'index']);
Route::get('product3',[ProductController::class,'index3']);
//--------------------------------admin--------------------------
Route::get('/admin',function(){
    return view('admin.home');
});


// Route::get('test', function () {
//     return view('vtest',['sach'=>DB::table('book')->get()]);
// });