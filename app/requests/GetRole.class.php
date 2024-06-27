<?php

namespace app\requests;

use core\App;

class GetRole {
    static function getRoles(int $userId) {
        $roles = ['user'];
        $medoo = App::getDB();
        
        $roleDetails = $medoo->select('roledetail', [
            'idRoledetail',
            'updatedate',
            'iduser',
            'idRole'
        ], [
            'iduser' => $userId
        ] );
        
        foreach ($roleDetails as $roleDetail ) {
            $role = $medoo->select('role', [
                'idRole',
                'Rolename'
            ], [
                'idRole' => $roleDetail['idRole']
            ] );
            
            array_push($roles, $role[0]['Rolename'] );
        }
        
        return $roles;
    }
}
