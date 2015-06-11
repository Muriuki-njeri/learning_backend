<?php

$months=["January","February","March","April","May","June","July","August","September","October","November","December"];

foreach ($months as $month){
         $firstDateInMonth="1st " . "{$month} " . date("Y");
         $dayAsTimeStamp=strtotime($firstDateInMonth);
         $dayInMonth=date("t",$dayAsTimeStamp);

       echo "{$month} - {$dayInMonth} </br>";

       
}

function dayOfMonth($month){
                   $firstDateInMonth="1st " . "{$month} " . date("Y");
                   $dayAsTimeStamp=strtotime($firstDateInMonth);
                   $dayInMonth=date("t",$dayAsTimeStamp);
                   return $dayInMonth;
}
