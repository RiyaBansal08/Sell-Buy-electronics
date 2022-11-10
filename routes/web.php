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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/returnPolicy', function () {
    return view('returnPolicy');
});

Route::get('/termsAndCondition', function () {
    return view('termsAndCondition');
});

Route::get('/goGreen', function () {
    return view('gogreen');
})->name('goGreen');


Route::prefix('sellPhone')->group(function () {

    Route::get('/', function () {
        return view('sell.sellPhone');
    })->name('sellPhone');

    Route::prefix('/sellApple')->group(function () {

        Route::get('/', function () {
            return view('sell.apple');
        })->name('applePhone');

        Route::prefix('/iPhone13ProMax')->group(function () {

            Route::get('/', function () {
                return view('sell.iPhone13ProMax');
            })->name('iPhone13ProMax');

            Route::get('/64GB', function () {
                return view('sell.i13promax_64gb');
            })->name('i13promax_64gb');

            Route::get('/64GB/PhoneDetails', function () {
                return view('sell.sell_form_details');
            })->name('PhoneDetails');
        });

    });

});

Route::prefix('buyPhone')->group(function () {

    Route::get('/', function () {
        return view('buy.phone');
    })->name('buyPhone');

    Route::get('/cart', function () {
        return view('buy.cart');
    })->name('cart');
});
