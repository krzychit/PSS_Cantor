<?php

namespace app\requests;

use core\App;

class GetDataForLogIn {
    static function getDataFromUserTable($username = null, $userId = null, $invertId = false) {
        $medoo = App::getDB();
        $where = [

        ];
        
        if ( isset($username) ) {
          $where['login'] = $username;
        }
        
        if ( isset($userId) && !$invertId ) {
          $where['iduser'] = $userId;
        }
        
        if ( isset($userId) && $invertId ) {
          $where['iduser[!]'] = $userId;
        }
        
        $users = $medoo->select('User', [
            'iduser',
            'login',
            'password',
            'role',
            'isactive',
            'lastlogin',
            'name',
            'surname',
            'city',
            'createdby',
            'whochanged'
        ], $where);
        
        return isset($users[0] ) ? $users[0] : null;
    }
}
