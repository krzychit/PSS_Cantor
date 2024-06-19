<?php

namespace app\controllers;

use core\App;


class HomeCtrl {
     
    private function getCurrencies() {
        $medoo = App::getDB();

        $currencies = $medoo->select('Currency', [
            'idcurrency',
            'currencyname',
            'currencycode',
            'priceindollars'
        ]);

        return $currencies;
    }
    
    public function action_HomeShowCurrencies() {
        
        $this->generateView($this->getCurrencies());
            
    }
    
    private function generateView($currencies) {
        App::getSmarty()->assign('currencies', $currencies);
        
        App::getSmarty()->display('main.tpl');
    }
    
}
