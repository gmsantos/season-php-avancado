<?php

namespace Season\Telefonia;

use Season\Telefonia\Traits\CanDial;
use Season\Telefonia\Traits\CanEmergencyCalls;

class Celular 
{
    use CanDial, CanEmergencyCalls;
}
