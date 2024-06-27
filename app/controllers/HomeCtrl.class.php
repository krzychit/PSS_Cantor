<?php

namespace app\controllers;

use core\App;
use app\forms\ExchangeForm;

class HomeCtrl {
    protected $form;
    
    public function __construct() {
        $this->form = new ExchangeForm();
    }
    
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
        $this->generateView();
    }
    
    protected function generateView() {
        $currencies = $this->getCurrencies();
        
        App::getSmarty()->assign('currencies', $currencies);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('main.tpl');
    }
}
