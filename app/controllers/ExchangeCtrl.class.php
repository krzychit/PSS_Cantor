<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class  ExchangeCtrl extends HomeCtrl {
    private $currency1 = null;
    private $currency2 = null;
    
    public function action_exchange() {
        if (!$this->validate()) {
            $this->generateView();
            return;
        }
        
        $priceindollars = $this->form->amount * $this->currency1['priceindollars'];
        $price_in_second_currency = 1 / $this->currency2['priceindollars'];
        $converted_price = $priceindollars * $price_in_second_currency;
        $this->insertTransaction($converted_price);
        
        App::getSmarty()->assign('converted_price', $converted_price);
        
        $this->generateView();
    }
    
    private function validate() {
        $amount =  ParamUtils::getFromRequest('amount');
        $this->form->currencycode1 = ParamUtils::getFromRequest('currencycode1');
        $this->form->currencycode2 = ParamUtils::getFromRequest('currencycode2');
       
        if (empty($amount)) {
            Utils::addErrorMessage('Kwota jest wymagana');
            return false;
        }
        
        if (!is_numeric($amount)) {
            Utils::addErrorMessage('Kwota musi być liczbą');
            return false;
        }
        
        $this->form->amount = floatval($amount);
        
        if (empty($this->form->currencycode1)) {
            Utils::addErrorMessage('Kod waluty 1 jest wymagany');
        }
        
        if (empty($this->form->currencycode2)) {
            Utils::addErrorMessage('Kod waluty 2 jest wymagany');
        }
        
        if (App::getMessages()->isError()) {
            return false;
        }
        
        $this->currency1 = $this->getCurrency($this->form->currencycode1);
        $this->currency2 = $this->getCurrency($this->form->currencycode2);
        
        if ($this->currency1 == null) {
            Utils::addErrorMessage('Waluta 1 nie istnieje');
        }
        
        if ($this->currency2 == null) {
            Utils::addErrorMessage('Waluta 2 nie istnieje');
        }
        
        return !App::getMessages()->isError();
    }
    
    private function getCurrency ($code) {
        $medoo = App::getDB();
        
        $currencies = $medoo->select('Currency', [
            'idcurrency',
            'currencyname',
            'currencycode',
            'priceindollars'
        ], [
            'currencycode' => $code
        ] );
        
        return isset( $currencies[ 0 ] ) ? $currencies[ 0 ] : null;
    }
    
    private function insertTransaction($converted_price) {
        $user = SessionUtils::loadObject('user', true);
        
        App::getDB()->insert('transaction', [
            'soldamount' => $this->form->amount,
            'purchasedamount' => $converted_price,
            'idsoldcurrency' => $this->currency1['idcurrency'],
            'idpurchasedcurrency' => $this->currency2['idcurrency'],
            'iduser' => $user['iduser'],
            'transactiondate' => date('Y-m-d')
        ]);
    }
}
