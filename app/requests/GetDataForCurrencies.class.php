<?php

namespace app\requests;

use core\App;
use app\forms\CurrencyForm;

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
