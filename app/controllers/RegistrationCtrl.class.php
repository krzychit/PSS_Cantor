<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegistrationForm;
use app\requests\EnterRegistrationData;

class RegistrationCtrl {
    
    private $form;
    
    public function __construct() {
        $this->form = new RegistrationForm();       
    }
    
    public function validate() {     
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->city = ParamUtils::getFromRequest('city');
        $this->form->username = ParamUtils::getFromRequest('username');
        $this->form->password = ParamUtils::getFromRequest('password' );
        $this->form->confirm_password = ParamUtils::getFromRequest('confirm_password');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Podaj imię');
        }

        if (empty($this->form->surname)) {
            Utils::addErrorMessage('Podaj nazwisko');
        }

        if (empty($this->form->city)) {
            Utils::addErrorMessage('Podaj miasto');
        }

        if (empty($this->form->username)) {
            Utils::addErrorMessage('Podaj nazwę użytkownika');
        }

        if (empty($this->form->password)) {
            Utils::addErrorMessage('Podaj hasło');
        }

        if (empty($this->form->confirm_password)) {
            Utils::addErrorMessage('Powtórz hasło');
        }

        if ($this->password != $this->confirm_password) {
            Utils::addErrorMessage('Wprowadzone hasła nie pasują do siebie');
        }

        // sprawdzenie, czy użytkownik jest w systemie
        $this->userLogin = GetDataForLogIn::getDataFromUserTable($this->form->login);

        if ($userLogin != null) {
            Utils::addErrorMessage('Użytkownik istnieje już w systemie');
        }
        
        return !App::getMessages()->isError();        
    }
 
    public function action_registerShow() {
        $this->generateView('singup.tpl', ['form' => $this->form]);
        return;
    }

    public function action_register() {
        if (!$this->validate()) {
            $this->generateView('singup.tpl', ['form' => $this->form]);
            return;
        }

        $adduser = EnterRegistrationData::insertDataToUserTable($this->form);

        //$this->logIn($adduser);

        //App::getRouter()->redirectTo('singup.tpl');
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        
        App::getSmarty()->display('singup.tpl');
    }    
}
