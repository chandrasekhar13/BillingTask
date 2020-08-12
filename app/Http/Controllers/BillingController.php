<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Page;
use DateTime;



class BillingController extends Controller
{
    public function home()
    {
        return view('form');
    }
    public function action(Request $request)
    {
        $start_date = $request->input('date');
        $end_date = $request->input('date2');
        $first_date = str_replace('/', '-', $start_date);
        $last_date = str_replace('/', '-', $end_date);
        $firstDate = strtotime($first_date);
        $lastDate = strtotime($last_date);

        if ($firstDate >= $lastDate) {
            return view('error');
        } else {
            $startDate = DateTime::createFromFormat('d/m/Y', $start_date);

            $startDateFormat = $startDate->format('Y-m-d');
            $endDate = DateTime::createFromFormat('d/m/Y', $end_date);
            $endDateFormat = $endDate->format('Y-m-d');


            $billingPeriod = Page::getBillingPeriod($startDateFormat, $endDateFormat, $step = '+1 month', $format = 'Y-m-d', $period = '20');

            return view('billing')->with("bill", $billingPeriod);
        }
    }
}
