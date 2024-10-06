<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThuctapController;
use Illuminate\Support\Facades\DB;

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

Route::get('/trangchu', [HomeController::class, 'home'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
// Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('admin');

Route::get('/detail/{slug}', [HomeController::class, 'show_detail'])->name('detail');

Route::get('/chaoban', function () {
    return view('xinchao');
});

Route::get('/tinhtich/{a}/{b}', [ThuctapController::class, 'tinhtich']);

Route::get('/db1', function () {
    $query = DB::table('loaiTin')->select('id', 'ten');
    $kq = $query->first();
    print_r($kq);
    echo "<h4> {$kq->ten} </h4>";
});

Route::get('/db2', function () {
    $query = DB::table('loaiTin')->select('id', 'ten');
    $rows = $query->get();

    foreach($rows as $row) {
        echo "<p> {$row->ten} </p>";
    }

});

