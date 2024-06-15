<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\requests\GetDataForLogIn;

class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;
        
        if (!isset($this->form->password))
            return false;        

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        
        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        $this->userLogin = GetDataForLogIn::getDataFromUserTable($this->username);

        if ($this->userLogin == null) {
            Utils::addErrorMessage('Nieprawidłowy użytkownik');
        }

        $isPasswordCorrect = passwordCheck($this->password, $this->userLogin['password']);

        if (!$isPasswordCorrect) {
            Utils::addErrorMessage('Nieprawidłowe hasło');
        }

        return !App::getMessages()->isError();        
    }

    public function action_loginShow() {
        $this->generateView('login.tpl', ['form' => $this->form]);
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView('login.tpl', ['form' => $this->form]);
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        
        //App::getRouter()->redirectTo('main');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        
        App::getSmarty()->display('login.tpl');
    }

}
