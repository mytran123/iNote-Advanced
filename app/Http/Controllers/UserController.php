<?php

namespace App\Http\Controllers;

use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function create()
    {
        $roles = $this->roleRepository->getAll();
        return view("backend.user.create", compact("roles"));
    }

    public function store(Request $request)
    {
//        $role = $request->input('role-id');
//        dd($request);
        $this->userRepository->create($request);
        return redirect()->route("users.list");
    }

    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.detail", compact("user"));
    }

    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        $roles = $this->roleRepository->getAll();
        $roleOfUser = $this->userRepository->getRoleOfUser($id);
        return view("backend.user.update", compact("user",'roles','roleOfUser'));
    }

    public function update(Request $request, $id)
    {
        $this->userRepository->update($request, $id);
        return redirect()->route("users.list");
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->route("users.list");
    }
}
