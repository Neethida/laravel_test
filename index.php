<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use NumbertoWord\NumbertoWord;


printf("Now: %s", Carbon::now());




echo NumbertoWord::numberTowords(21);