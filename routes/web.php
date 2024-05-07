<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArtikelController;
use PharIo\Manifest\Author;

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

Auth::routes();
// Route::get('/', function () {
//     return redirect('login');
// });

Route::group(['prefix' => 'a', 'midddleware' => ['auth', 'isAdmin']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['prefix' => 'b', 'midddleware' => ['auth', 'isAuthor']], function () {
    Route::get('dashboard', [AuthorController::class, 'dashboard'])->name('Author.dashboard');
    Route::get('artikel',[AuthorController::class, 'artikel'])->name('Author.artikel');
    Route::post('artikel/add',[ArtikelController::class, 'Addartikel'])->name('Author.artikel.add');
});
