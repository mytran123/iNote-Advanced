<?php

namespace App\Repository;

use App\Http\Controllers\NoteController;
use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        $users = User::all();
        return $users;
    }

    public function create($request)
    {
        $data = $request->only('name','phone','email','password','image','birthday','sex');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $user = User::query()->create($data);
        return $user;
    }

    public function store($request)
    {
        $data = $request->only('name','phone','email','password','image','birthday','sex');
        User::query()->create($data);
    }

    public function getById($id)
    {
        $note = Note::findOrFail($id);
        return $note;
    }

    public function update($request, $id)
    {
        Note::query()->findOrFail($id);
        $data = $request->only('name','phone','email','password','birthday','sex','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        return USer::query()->where('id','=',$id)->update($data);
    }

    public function delete($id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
    }
}
