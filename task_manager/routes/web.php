<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|8000
*/

// Route::get('index', function () {
//     return view('modules.customer.index');
// });

Route::prefix('customer')->group(function(){
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/create', [CustomerController::class, 'create']);

    Route::get('{id}/show', function ($id) {
        echo $id;
    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });

    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});
