<?php

namespace app\forms;

use app\requests\EnterRegistrationData;

class RegistrationForm {
    public string $name;
    public string $surname;
    public string $city;
    public string $username;
    public string $password;
    public string $confirm_password;
}
