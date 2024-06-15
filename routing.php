<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl', ['user', 'admin']);
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('registerShow', 'RegistrationCtrl');
Utils::addRoute('register', 'RegistrationCtrl');