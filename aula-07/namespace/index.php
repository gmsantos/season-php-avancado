<?php

spl_autoload_extensions(".php");
spl_autoload_register();

use Acme\App;

(new App())->run();

