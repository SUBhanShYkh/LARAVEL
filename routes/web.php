<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/')->group(function(){
    Route::get('index', function () {
        return view('index');
    });
    Route::get('add-member',[MemberController::class,"create"]);
    Route::get('members',[MemberController::class,"show"]);
    Route::post('add_member',[MemberController::class,"store"]);
    Route::get('Member-List!',[MemberController::class,"show"]);
    Route::get('delete/({name}-{id})',[MemberController::class,"delete"]);
    Route::get('update/({name}-{id})',[MemberController::class,"edit"]);
    Route::post('update_member',[MemberController::class,"update"]);
});
