<?php

use DebugBar\DebugBar;
use DebugBar\DebugBarException;
use Illuminate\Support\Facades\Route;

use function Psy\debug;

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

    return view('zuriLaravel');
});


