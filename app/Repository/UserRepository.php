<?php

namespace App\Repository;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function getAll()
    {
        $users = User::all();
        return $users;
    }

//    public function create($request)
//    {
//        $data = $request->only('name','phone','email','password','role-id');
//        $image = $request->file('file');
//        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
//        $path = public_path('img');
//        $image->move($path, $data['image']);
//        $user = User::query()->create($data);
//        $user->roles()->attach($data['role-id']);
//        return $user;
//
////        $user = new User();
////        $user->fill($request->all());
////        $user->save();
////        $user->roles()->sync($request->role_id);
//    }

    public function store($request)
    {
        $data = $request->only('name','phone','email','password','image','birthday','sex');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $user = User::query()->create($data);
        $user->roles()->attach($data['role-id']);
        return $user;
    }

    public function getById($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update($request, $id)
    {
        User::query()->findOrFail($id);
        $data = $request->only('name','phone','email','password','birthday','sex','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        return User::query()->where('id','=',$id)->update($data);
    }

    public function delete($id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
    }

    function getRoleOfUser($userId)
    {
        $roles = DB::table('role_user')->where('user_id',$userId)->get();
        return $roles;
    }
}
