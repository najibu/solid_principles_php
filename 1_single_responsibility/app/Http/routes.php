<?php

use Acme\Reporting\HtmlOutput;
use Acme\Reporting\SalesReporter;
use Acme\Repositories\SalesRepository;

Route::get('/', function () {
    $report = new SalesReporter(new SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();


    return $report->between($begin, $end, new HtmlOutput);
});
