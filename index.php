<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use numbertoword\numbertoword;


printf("Now: %s", Carbon::now());


echo "<br>";
echo NumbertoWord::numberTowords(299);

echo "<br>";
echo NumbertoWord::numberTowords(2291);

echo "<br>";
echo NumbertoWord::numberTowords(911);