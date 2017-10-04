<?php
/**
 * Created by PhpStorm.
 * User: antoanpopoff
 * Date: 10/4/17
 * Time: 6:37 AM
 */
\Illuminate\Support\Facades\Route::get('/', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index',
]);