<?php

namespace App\Repository;

use App\Models\Role;

class RoleRepository
{
    public function getAll()
    {
        $roles = Role::all();
        return $roles;
    }

//    public function getById($id)
//    {
//        $roles = Role::findOrFail($id);
//        return $roles;
//    }
}
