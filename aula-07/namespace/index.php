<?php

require 'vendor/autoload.php';

use Acme\App;
use Gmsantos\Inspiring;

(new App())->run();

echo Inspiring::quote();

