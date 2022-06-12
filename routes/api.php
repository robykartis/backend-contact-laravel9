<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('contacts', [ContactController::class, 'contact']);

Route::post('save_contacts', [ContactController::class, 'saveContact']);

Route::get('get_contacts/{id}', [ContactController::class, 'getContact']);

Route::post('update_contacts/{id}', [ContactController::class, 'updateContact']);

Route::delete('delete_contacts/{id}', [ContactController::class, 'deleteContact']);