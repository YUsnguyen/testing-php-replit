<?php
//links index.php to the other file, syntax include "filename"
include "Calculator.php";
//create variable, $ is the PHP syntax "my" indicates our own code, this line turns/refers class of Calculator in "Calculator.php" into object
$myCalc = new Calculator();
//echos/outputs onto page, -> (PHP specific vs . in other langs) connects object to funtion of add
echo $myCalc->add(2,2);