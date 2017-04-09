<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $report = new Acme\Reporting\SalesReporter(new Acme\Repositories\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end, new Acme\Reporting\HtmlOutput);
});
