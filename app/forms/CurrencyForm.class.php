<?php

namespace app\forms;

use app\requests\GetDataForCurrencies;

class CurrencyForm {
    public string $name="";
    public string $code="";
    public float $price=0.0;
}
