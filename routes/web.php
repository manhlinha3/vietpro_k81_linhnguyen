<?php

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

// Cấu trúc route

// Route::PHương_thức('đường_dẫn', Hàm_thực_thi);


//GET
Route::get('xin-chao.html',function () {
    echo 'xin chào các bạn';
    return 'mình là phúc';
});

Route::get('khoa-hoc/laravel-6.0', function () {
    echo 'đây là khoá học laravel';
});

//truyền tham số trên route

Route::get('ho-va-ten/{name}/a', function ($name) {
    echo $name;
});

//truyền tham số mặc định trên route
Route::get('mon-an/{monAn?}', function ($monAn='món ăn mặc định') {
    echo $monAn;
});



//PROJECT

Route::get('','userController@getList');

Route::get('add', 'userController@getAdd');
Route::post('add', 'userController@postAdd');

Route::get('edit/{idUser}', 'userController@getEdit');
Route::post('edit/{idUser}', 'userController@postEdit');
Route::get('del/{idUser}', 'userController@delUser');