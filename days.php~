<?php

$months=$_REQUEST["month"];
$dayInMonth=daysOfMonth($month);
echo "This month has $dayInMonth";

function daysOfMonth($month){
                   $firstDateInMonth="1st " . "{$month} " . date("Y");
                   $dayAsTimeStamp=strtotime($firstDateInMonth);
                   $dayInMonth=date("t",$dayAsTimeStamp);
                   return $dayInMonth;
}
