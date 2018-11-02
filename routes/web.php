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

Route::get('/', function () {
/*
    $link = mysqli_connect('172.17.179.14','root','iloveyou123');
    mysqli_select_db('confused_db',$link);

    mysqli_query($link,'show tables');*/

    return view('welcome',function (){
        return 11331;
    });
});
