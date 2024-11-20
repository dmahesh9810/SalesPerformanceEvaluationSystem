<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        echo json_encode($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        echo json_encode($user);
    }

    public function store()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $user = User::create($data);
        echo json_encode($user);
    }

    public function update($id)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $user = User::update($id, $data);
        echo json_encode($user);
    }

    public function destroy($id)
    {
        $result = User::delete($id);
        echo json_encode(['success' => $result]);
    }
}
