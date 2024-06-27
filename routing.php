<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('HomeShowCurrencies'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('HomeShowCurrencies', 'HomeCtrl');

//Logowanie:
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

//Rejestracja:
Utils::addRoute('registerShow', 'RegistrationCtrl');
Utils::addRoute('register', 'RegistrationCtrl');

//Wymiana waluty:
Utils::addRoute('exchange', 'ExchangeCtrl', ['User', 'Admin']);

//Zarządzanie użytkownikami:
foreach (['usersList', 'addUserShow', 'addUser', 'editUserShow', 'editUser', 'deleteUser'] as $action) {
Utils::addRoute($action, 'UsersCtrl', ['Admin']);
};
