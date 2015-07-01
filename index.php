<?php
$today=date("l");
$topics=array(
              "Monday"=>"php",
              "Tuesday"=>"html",
              "Wednesday"=>"css",
              "Thursday"=>"apache",
              "Friday"=>"markdown",

);
$topic= $topics[$today];
echo "today $today we are to learn all about $topic";
