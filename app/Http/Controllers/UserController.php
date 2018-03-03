<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        $users = User::active()->get();

        return response()->json(['users' => $users]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(123456);
        $user->save();
        $user->roles()->sync([3]);

        return response()->json(['success' => true, 'msg' => 'user stored']);
    }


    public function show(User $user)
    {
        return response()->json(['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->update();

        return response()->json(['success' => true, 'msg' => 'user updated']);
    }


    public function updateStatus(User $user)
    {
        $user->status = $user->status == 'active' ? 'inactive' : 'active';
        $user->update();

        return response()->json(['success' => true, 'msg' => 'user updated']);
    }

    public function login(Request $request)
    {
        $user = User::findUserByEmail($request->email);
        if (!$user->exists()) {
            return response()->json(['error' => 'user not found'])
                ->setStatusCode(401);
        }

        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('CMS Personal Access Client')->accessToken;
            return response()->json(['token' => $token, 'role' => $user->roleNames]);
        }

        return response()->json(['error' => 'wrong credentials'])
            ->setStatusCode(401);
    }

    public function showUserInfo(Request $request)
    {
        $user = User::findUserByToken($request->user()->id);

        return response()->json(['user' => $user->name]);
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false,
                'errors' => $validator->errors()])
                ->setStatusCode(400);
        }

        $user = User::findUserByToken($request->user()->id);

        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->update();
            return response()->json(['success' => true,
                'message' => 'user password updated']);
        }

        return response()->json(['error' => 'wrong password'])
            ->setStatusCode(400);
    }
}
