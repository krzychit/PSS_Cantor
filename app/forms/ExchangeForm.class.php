<?php

namespace app\forms;

use core\App;
use core\Utils;
use core\ParamUtils;

class ExchangeForm {
    public float $amount = 0.0;
    public string $currencycode1 = '';
    public string $currencycode2 = '';
}