<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class Dashboard extends Controller {
    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);
    }

    public function show() {
        return view('pages.dashboard.main')->with($this->data);
    }

    public function get_sales($by = 'day') {
        switch ($by) {
            case 'day':
                $this->get_sales_by_day();
                break;
            case 'month':

                break;
            case 'year':

                break;
        }
    }

    private function get_sales_by_day() {
        $date = Carbon::now();
        $year = $date->year;
        $month = $date->month;

        echo 'Year: ' . $year;
        echo 'Month: ' . $month;


    }

    private function get_sales_by_month() {
        $date = Carbon::now();

    }

    private function get_sales_by_year() {
        $date = Carbon::now();

    }

}
