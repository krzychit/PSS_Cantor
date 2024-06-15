<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\requests\GetDataForLogIn;
use app\requests\GetRole;

class LoginCtrl {

    private $form;
    //metoda prob i bledow:
    //private $userLogin;
    //private $login;
    //private $isPasswordCorrect;
    //private $passwordCheck;
    //private $user;
    
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
        $this->userLogin = GetDataForLogIn::getDataFromUserTable($this->form->login);

        if ($this->userLogin == null) {
            Utils::addErrorMessage('Nieprawidłowy użytkownik');
        }

        $isPasswordCorrect = password_verify($this->form->password, $this->userLogin['password']);

        if (!$isPasswordCorrect) {
            Utils::addErrorMessage('Nieprawidłowe hasło');
        }

        return !App::getMessages()->isError();        
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if (!$this->validate()) {
            $this->generateView();
            return;
        }
        
        $userId = intval($this->userLogin["iduser"]);
        
        $roles=GetRole::getRoles($userId);
        
        foreach ($roles as $role) {
            RoleUtils::addRole($role);
        }
        
        SessionUtils::storeObject('user', $this->userLogin);
        App::getRouter()->redirectTo('main');       
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
