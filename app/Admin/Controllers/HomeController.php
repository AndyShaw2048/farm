<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('情况总览');

            $content->row(Dashboard::title());
            $chart = Charts::create('line', 'highcharts')
                           ->setView('custom.line.chart.view') // Use this if you want to use your own template
                           ->setTitle('My nice chart')
                           ->setLabels(['First', 'Second', 'Third'])
                           ->setValues([5,10,20])
                           ->setDimensions(1000,500)
                           ->setResponsive(false);
            $content->body(view('test', ['chart' => $chart]));
        });
    }
}
