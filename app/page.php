<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    public static function getBillingPeriod($firstDate, $lastDate, $step = '+1 day', $format = 'Y-m-d', $period = '20')
    {


        $dates = array();

        $first  = strtotime($firstDate);
        $current = strtotime($firstDate);
        $last   = strtotime($lastDate);

        $startSet = $period;
        $endSet = $period - 1;

        $startFormat = "Y-m-{$startSet}";
        $endFormat = "Y-m-{$endSet}";


        $i = 0;
        $loopEnd = true;
        if ((date("d", $first) <= 20 && date("d", $last) <= 19 && (date("m", $first) == date("m", $last))) || (date("d", $first) >= 20 && date("d", $last) >= 19 && (date("m", $first) == date("m", $last)))) {
            $dates[$i]['startDate'] = $firstDate;
            $dates[$i]['endDate'] = $lastDate;
            return $dates;
        } else {
            while ($current <= $last) {

                if ($first == $current) {
                    //Start Month

                    $dates[$i]['startDate'] = $firstDate;

                    $chkStartDay = date("d", $first);
                    if ($chkStartDay < $period) {



                        $dates[$i]['endDate'] = date($endFormat, $current);
                    } else {

                        $dates[$i]['endDate'] = date($endFormat, strtotime("+1 month", $current));
                    }

                    $nextDateEnd = $dates[$i]['endDate'];
                } else {


                    $dates[$i]['startDate'] = date("Y-m-d", strtotime("+1 day", strtotime($nextDateEnd)));
                    $dates[$i]['endDate'] = date($endFormat, strtotime("+1 month", strtotime($dates[$i]['startDate'])));;


                    if ($lastDate < $dates[$i]['endDate']) {
                        $dates[$i]['endDate'] = $lastDate;
                        $loopEnd = false;
                    }
                }

                $nextDateStart = $dates[$i]['startDate'];
                $nextDateEnd = $dates[$i]['endDate'];

                $current = strtotime($step, $current);

                $i++;
            }


            if ($lastDate > date($endFormat, strtotime($lastDate)) and $loopEnd == true) {


                $dates[$i]['startDate'] = date("Y-m-d", strtotime("+1 day", strtotime($nextDateEnd)));
                $dates[$i]['endDate'] = $lastDate;
            }
            if ($lastDate < date($endFormat, strtotime($lastDate)) and $loopEnd == true) {


                $dates[$i]['startDate'] = date("Y-m-d", strtotime("+1 day", strtotime($nextDateEnd)));
                $dates[$i]['endDate'] = $lastDate;
            }

            return $dates;
        }
    }
}
