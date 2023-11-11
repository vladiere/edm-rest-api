<?php

namespace App\Http\Service;

use App\Models\User;


class UserService {
    
    public static function addName($fullname)
    {
        $names = new User();
        $names->fullname = $fullname;
        $names->save();
        return User::all();
    }
    public static function getUsers () {
        return User::all();
    }

    public static function updateName($id, $newfullname)
    {
        $fullname = User::find($id);
        $fullname->fullname = $newfullname;
        $fullname->save();
        return User::all();
    }

    public static function removeName($id)
    {
        User::find($id)->delete();
        return User::all();
    }
}