<?php

use App\Models\userPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userPostController;


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

Route::get('/', function (userPost $posts) {
    return view('welcome',[
    	"posts"=> userPost::all()
    ]);
});

Route::resource('app-table', userPostController::class);
