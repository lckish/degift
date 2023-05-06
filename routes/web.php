<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'], function() {
Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Admin\Tag\CreateController::class)->name('tag.create');
    Route::post('/', \App\Http\Controllers\Admin\Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', \App\Http\Controllers\Admin\Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', \App\Http\Controllers\Admin\Tag\ShowController::class)->name('tag.show');
    Route::patch('/{tag}', \App\Http\Controllers\Admin\Tag\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', \App\Http\Controllers\Admin\Tag\DeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'colors'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Color\IndexController::class)->name('color.index');
    Route::get('/create', \App\Http\Controllers\Admin\Color\CreateController::class)->name('color.create');
    Route::post('/', \App\Http\Controllers\Admin\Color\StoreController::class)->name('color.store');
    Route::get('/{color}/edit', \App\Http\Controllers\Admin\Color\EditController::class)->name('color.edit');
    Route::get('/{color}', \App\Http\Controllers\Admin\Color\ShowController::class)->name('color.show');
    Route::patch('/{color}', \App\Http\Controllers\Admin\Color\UpdateController::class)->name('color.update');
    Route::delete('/{color}', \App\Http\Controllers\Admin\Color\DeleteController::class)->name('color.delete');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', \App\Http\Controllers\Admin\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\Admin\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\Admin\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', \App\Http\Controllers\Admin\User\EditController::class)->name('user.edit');
    Route::get('/{user}', \App\Http\Controllers\Admin\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', \App\Http\Controllers\Admin\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Product\IndexController::class)->name('product.index');
    Route::get('/create', \App\Http\Controllers\Admin\Product\CreateController::class)->name('product.create');
    Route::post('/', \App\Http\Controllers\Admin\Product\StoreController::class)->name('product.store');
    Route::get('/{product}/edit', \App\Http\Controllers\Admin\Product\EditController::class)->name('product.edit');
    Route::get('/{product}', \App\Http\Controllers\Admin\Product\ShowController::class)->name('product.show');
    Route::patch('/{product}', \App\Http\Controllers\Admin\Product\UpdateController::class)->name('product.update');
    Route::delete('/{product}', \App\Http\Controllers\Admin\Product\DeleteController::class)->name('product.delete');
});

});

Route::get('{page}', \App\Http\Controllers\Client\IndexController::class)->where('page','.*');
