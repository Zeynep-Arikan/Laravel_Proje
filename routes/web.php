<?php

use App\Http\Controllers\StudentController;
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

/*öğrenci listesini görüntülemek için bir get isteğini karşılar.*/
Route::get("/students",[StudentController::class,'index']);

/*Yeni bir öğrenci oluşturmak için kullanılan sayfayı göstermek üzere bir get isteğini karşılar. İstek geldiğinde, StudentController sınıfındaki create metodunu çağırır.*/
Route::get("/students/create",[StudentController::class,'create']);

/*öğrenci oluşturmak için kullanılan formun verilerini almak üzere bir post isteğini karşılar. İstek geldiğinde, StudentController sınıfındaki store metodunu çağırır.*/
Route::post("/students",[StudentController::class,'store']);

/*öğrencinin bilgilerini düzenlemek için kullanılan sayfayı göstermek üzere bir get isteğini karşılar. İstek geldiğinde, StudentController sınıfındaki edit metodunu çağırır.*/
Route::get("/students/{student}/edit",[StudentController::class,'edit']);

/*öğrencinin bilgilerini güncellemek için kullanılan formun verilerini almak üzere bir put isteğini karşılar. İstek geldiğinde, StudentController sınıfındaki update metodunu çağırır.*/
Route::put("/students/{student}",[StudentController::class,'update']);

/*öğrenciyi silmek için kullanılan rota. İstek geldiğinde, StudentController sınıfındaki destroy metodunu çağırır.*/
Route::delete("/students/{student}",[StudentController::class,'destroy']);
