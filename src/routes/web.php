<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailSendController;
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
    return view('welcome');
});

Route::get('/buy', function () {
    return view('buy');


Route::get('/mail', [MailSendController::class, 'send']);

