<?php

namespace app\requests;

use core\App;
use app\forms\RegistrationForm;

class EnterRegistrationData {
    static function insertDataToUserTable(RegistrationForm $form ) {
        $medoo = App::getDB();

        $data = [
            'login'=>$form->username,
            'password'=>password_hash($form->password, PASSWORD_DEFAULT),
            'isactive'=>1,
            'lastlogin'=>date('Y-m-d'),
            'name'=>$form->name,
            'surname'=>$form->surname,
            'city'=>$form->city,
            'createdby'=>null,
            'whochanged'=>null
        ];

        $medoo->insert('User', $data);

        $data['iduser']=intval($medoo->id());

        return $data;
    }
}
