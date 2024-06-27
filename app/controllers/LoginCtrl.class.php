<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use app\requests\GetRole;
use app\requests\GetDataForLogIn;

class LoginCtrl {
    private $form;
    
    public function __construct() {
        $this->form = new LoginForm();
        //stworzenie potrzebnych obiektów
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
        $this->userLogin = $this->getDataFromUserTable($this->form->login);
        
        if ($this->userLogin == null || !password_verify($this->form->password, $this->userLogin['password'])) {
            Utils::addErrorMessage('Nieprawidłowe dane logowania');
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
        
        RoleUtils::addRole($this->userLogin['role']);
        
        SessionUtils::storeObject('user', $this->userLogin);
        
        App::getRouter()->redirectTo('main');
    }
    
    private function getDataFromUserTable(string $username) {
        $medoo = App::getDB();
        
        $users = $medoo->select('User', [
            'iduser',
            'login',
            'password',
            'isactive',
            'role',
        ], [
            'login' => $username,
            'isactive' => 1
        ]);
        
        return isset($users[0] ) ? $users[0] : null;
    }
    
    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        
        App::getRouter()->redirectTo('main');
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        
        App::getSmarty()->display('login.tpl');
    }
}
