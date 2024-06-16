<?php

namespace app\requests;

use app\forms\CurrencyForm;
use core\App;

class GetDataForCurrencies {
    static function getCurrencies() {
        $medoo = App::getDB();

        $currencies = $medoo->select('Currency', [
            'idcurrency',
            'currencyname',
            'currencycode',
            'price_in_dollars'
        ]);

        return $currencies;
    }
    
}
