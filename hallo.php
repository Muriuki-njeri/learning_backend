<?php

function say_hello_to($name){
                echo "Hey {$name}! </br>";
}

$name="Akirachix student's";
say_hello_to($name);

function say_hello_with_title($name,$title="honourable"){
         echo "Hey {$title} {$name} ";
}

$name="Martha";
$title="Ms";

say_hello_with_title($name);
