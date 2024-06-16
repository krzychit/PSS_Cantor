<?php

namespace app\controllers;

use app\requests\GetDataForCurrencies;
use core\App;
use core\ParamUtils;
use core\Utils;

class CurrenciesCtrl {

    private $form;
    
    public function __construct() {
        $this->form = new CurrencyForm();       
    }
    
    public function validate() {
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->code = ParamUtils::getFromRequest('code');
        $this->form->price = floatval(ParamUtils::getFromRequest('price'));        
        
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nazwa waluty jest wymagana');
        }

        if (empty($this->form->code)) {
            Utils::addErrorMessage('Kod waluty jest wymagany');
        }

        if (empty($this->form->price)) {
            Utils::addErrorMessage('Przelicznik waluty (w dolarach) jest wymagany');
        }

        $currency = CurrenciesRepository::getCurrency($this->form->code);

        if ($currency != null) {
            Utils::addErrorMessage('Waluta istnieje już w systemie');
        }

        return !App::getMessages()->isError();        

    } 
}
