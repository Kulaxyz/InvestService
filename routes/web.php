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


Route::redirect('/home', '/wallet');

Auth::routes();

Route::get('/', 'PublicController@index')->name('index')->middleware('referral');
Route::get('article/{slug}', 'ArticleController@article')->name('article');
Route::get('blog', 'PublicController@blog')->name('blog');
Route::get('faq', 'PublicController@faq')->name('faq');
Route::get('about', 'PublicController@about')->name('about');

Route::view('reviews', 'reviews')->name('reviews');
Route::view('rules', 'rules')->name('rules');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('wallet', 'WalletController@index')->name('wallet');
    Route::get('depositList', 'WalletController@depositList')->name('depositList');
    Route::get('payment', 'WalletController@payment')->name('payment');
    Route::get('withdrawal', 'WalletController@withdrawal')->name('withdrawal');
    Route::get('withdrawalHistory', 'WalletController@withdrawalHistory')->name('withdrawalHistory');
    Route::get('referrals', 'WalletController@referrals')->name('referrals');
    Route::post('deposit', 'WalletController@deposit')->name('deposit');
    Route::post('withdrawal', 'WalletController@withdrawalMake')->name('withdrawal');
    Route::post('refill', 'WalletController@refill')->name('refill');
});
