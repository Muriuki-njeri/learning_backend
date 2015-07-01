<?php
$months=["January","February","March","April","May","June","July","August","September","October","November","December"];

foreach ($months as $month) {
$DayOfMonth = 1;
$yyyy = 2015;


    $time = strtotime($yyyy.'-'.$month.'-'.$DayOfMonth);
    $months = date('F',$time);
    $dayOfWeek = date('l',$time);
    
    echo $months.', '.$yyyy ." ". $dayOfWeek.' 
         .<br />';
}
