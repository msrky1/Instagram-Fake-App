<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FishingComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Controllers\FishingController;

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



Route::get('/' , HomeComponent::class);

Route::get('/instagram' , FishingComponent::class)->name('save.page');
Route::post('/save/post' , [ FishingController::class , 'save'])->name('save');




