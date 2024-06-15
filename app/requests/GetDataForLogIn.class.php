<?php

namespace app\requests;

use core\App;

class GetDataForLogIn {
    static function getDataFromUserTable(string $username) {
        $medoo = App::getDB();

        $users = $medoo->select('User', [
            'iduser',
            'login',
            'password',
            'isactive',
            'lastlogin',
            'name',
            'surname',
            'city',
            'createdby',
            'whochanged'
        ], [
            'login' => $username
        ]);

        return isset($users[0] ) ? $users[0] : null;
    }
}
