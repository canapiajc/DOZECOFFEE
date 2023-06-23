<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfgenerateController;
use App\Http\Controllers\Firebase\ContactController;
use App\Models\Product;

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

Route::get('/', function () {
    $data = product::all();
    return view('user.home',compact('data'));
    return view('user.home');   
});

// Route::get('/updateview', function () {
//     return view('admin.updateview');
// });
// route:: get('/',[HomeController::class,'index']);

Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');
route:: post('/uploadproduct',[AdminController::class,'uploadproduct']);
route:: post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
route:: post('/addcart/{id}',[HomeController::class,'addcart']);
route:: post('/order',[HomeController::class,'miyalapa']);
route:: post('/updatecart/{id}',[HomeController::class,'updatecart']);
route:: get('/cancel',[HomeController::class,'cancel']);
route:: get('/updateview/{id}',[AdminController::class,'updateview']);
route:: get('/admin.cards',[AdminController::class,'showproduct']);
route:: get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
route:: get('/showcart',[HomeController::class,'showcart']);
route:: get('/delete/{id}',[HomeController::class,'deletecart']);
route:: post('/updatedelivered/{id}',[AdminController::class,'updatedelivered']);
route:: get('/adminaccount',[AdminController::class,'adminaccount']);
route:: get('/useraccount',[AdminController::class,'useraccount']);
route:: get('/deleteorder/{id}',[AdminController::class,'deleteorder']);
route:: get('/invoice/{id}',[PdfgenerateController::class,'invoice']);

route:: post('/message',[ContactController::class,'insertmessage']);

route:: get('/adminshoworder',[AdminController::class,'adminshoworder']);
route:: get('/adminshowship',[AdminController::class,'adminshowship']);
route:: get('/updatereceived/{id}',[AdminController::class,'updatereceived']);

//route:: get('/user.home',[HomeController::class,'home']);
route:: get('/redirect',[HomeController::class,'redirect']);
route:: get('/user1',[HomeController::class,'userito']);
route:: get('/buttons',[HomeController::class,'buttons']);
route:: get('/about',[HomeController::class,'about']);
route:: get('/coffees',[HomeController::class,'coffees']);
route:: get('/blog',[HomeController::class,'blog']);
route:: get('/contact',[HomeController::class,'contact']);
route:: get('/shop',[HomeController::class,'shop']);

route:: get('/myorder',[HomeController::class,'myorder']);
route:: get('/table',[HomeController::class,'table']);
//route:: get('/admin.cards',[HomeController::class,'cards']);
