<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UsersForm;
use app\requests\GetDataForLogIn;
use app\requests\EnterRegistrationData;

class UsersCtrl {
    private $form;
    private $userId;
    private $user;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new UsersForm();
        $this->userId = null;
        $this->user = null;
    }
    
    public function action_usersList() {
        $this->generateView();
    }
    
    public function action_addUserShow() {
        App::getSmarty()->assign('buttonText', 'Dodaj użytkownika');
        App::getSmarty()->assign('action', 'addUser');
        
        $this->generateViewForm();
    }
    
    public function action_addUser() {
        App::getSmarty()->assign('buttonText', 'Dodaj użytkownika');
        App::getSmarty()->assign('action', 'addUser');
        
        if (!$this->validate()) {
            $this->generateViewForm();
            return;
        }
        
        $adduser = EnterRegistrationData::insertDataToUserTable($this->form);
        
        App::getRouter()->redirectTo('usersList');
        
        Utils::addInfoMessage('Użytkownik został dodany pomyślnie');
    }
    
    public function action_editUser() {
        App::getSmarty()->assign('buttonText', 'Edytuj użytkownika');
        App::getSmarty()->assign('css_url', '../css/main.css');
        
        if (!$this->validateUser()) {
            App::getRouter()->redirectTo('usersList');
            return;
        }
        
        App::getSmarty()->assign('action', '../editUser/' . $this->userId);
        
        if (!$this->validate()) {
            $this->generateViewForm();
            return;
        }
        
        $this->updateUser();
        
        App::getRouter()->redirectTo('usersList');
    }
    
    public function action_editUserShow() {
        App::getSmarty()->assign('buttonText', 'Edytuj użytkownika');
        App::getSmarty()->assign('css_url', '../css/main.css');
        
        if (!$this->validateUser()) {
            App::getRouter()->redirectTo('usersList');
            return;
        }
        
        $this->form->username = $this->user['login'];
        $this->form->role = $this->user['role'];
        $this->form->name = $this->user['name'];
        $this->form->surname = $this->user['surname'];
        $this->form->city = $this->user['city'];
        
        App::getSmarty()->assign('action', '../editUser/' . $this->userId);
        
        $this->generateViewForm();
    }
    
    public function action_deleteUser() {
        if (!$this->validateUser()) {
            App::getRouter()->redirectTo('usersList');
            return;
        }
        
        $this->deleteUser();
        
        App::getRouter()->redirectTo('usersList');
    }
    
    private function getUsers() {
        $medoo = App::getDB();
        
        $users = $medoo->select('User', [
            'iduser',
            'login',
            'password',
            'isactive',
            'role',
            'name',
            'surname',
            'city',
            'lastlogin',
            'whochanged'
        ]);
        
        return $users;
    }
    
    public function validate() {
        $this->form->username = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->role = ParamUtils::getFromRequest('role');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->city = ParamUtils::getFromRequest('city');
        
        //nie ma sensu walidować dalej, gdy brak parametrów
        
        if (empty($this->form->username)) {
            Utils::addErrorMessage('Podaj login użytkownika');
        }
        
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Podaj hasło użytkownika');
        }
        
        if (empty($this->form->role)) {
            Utils::addErrorMessage('Podaj rolę użytkownika');
        }
        
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Podaj imię użytkownika');
        }
        
        if (empty($this->form->surname)) {
            Utils::addErrorMessage('Podaj nazwisko użytkownika');
        }
        
        if (empty($this->form->city)) {
            Utils::addErrorMessage('Podaj miasto użytkownika');
        }
        
        // sprawdzenie, czy użytkownik jest w systemie
        $user = GetDataForLogIn::getDataFromUserTable($this->form->username, $this->userId, true);
        
        if ($user != null) {
            Utils::addErrorMessage('Użytkownik istnieje już w systemie');
        }
        
        return !App::getMessages()->isError();
    }
    
    private function validateUser() {
        $this->userId = intval(ParamUtils::getFromCleanURL(1,true,"Błędne wywołanie aplikacji"));
        $this->user = GetDataForLogIn::getDataFromUserTable(null, $this->userId, false);
        return isset ($this->user);
    }
    
    private function updateUser() {
        App::getDB()->update('user', [
        'login' => $this->form->username,
        'password' => password_hash($this->form->password, PASSWORD_DEFAULT),
        'role' => $this->form->role,
        'name' => $this->form->name,
        'surname' => $this->form->surname,
        'city' => $this->form->city
      ], [
        'iduser' => $this->userId
      ]);
    }
    
    private function deleteUser() {
        App::getDB()->delete('user', [ 'iduser' => $this->userId ]);
    }
    
    public function generateView() {
        $users = $this->getUsers();
        
        App::getSmarty()->assign('users', $users); // dane formularza do widoku
        App::getSmarty()->display('userslist.tpl');
    }
    
    public function generateViewForm() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('adduserform.tpl');
    }
}
